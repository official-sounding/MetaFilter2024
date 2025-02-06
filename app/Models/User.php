<?php

declare(strict_types=1);

namespace App\Models;

use App\States\User\UserState;
use App\Traits\SearchTrait;
use Cog\Contracts\Ban\Bannable as BannableInterface;
use Cog\Laravel\Ban\Traits\Bannable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Filament\Panel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\ModelStates\HasStates;
use Spatie\Permission\Traits\HasRoles;

/**
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $homepage_url
 * @property int $legacy_id
 * @property string $email
 * @property string $password
 * @property string $state
 *
 * @mixin Builder
 */
final class User extends Authenticatable implements
    BannableInterface,
    FilamentUser,
    HasMedia,
    HasName
{
    use Bannable;
    use HasApiTokens;
    use HasFactory;
    use HasRoles;
    use HasStates;
    use InteractsWithMedia;
    use Notifiable;
    use SearchTrait;
    use SoftDeletes;

    private const string DOMAIN = '@metafilter.com';

    // Properties

    public function newEloquentBuilder($query): UserEloquentBuilder
    {
        return new UserEloquentBuilder($query);
    }


    protected $fillable = [
        'name',
        'username',
        'homepage_url',
        'legacy_id',
        'email',
        'password',
        'state',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected array $searchable = [
        'username',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'state' => UserState::class,
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return str_ends_with($this->email, self::DOMAIN);
        // return $this->can(PermissionEnum::AccessPanel->value);
    }

    // Relationships

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function getFilamentName(): string
    {
        return $this->username;
    }
}
