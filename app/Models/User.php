<?php

declare(strict_types=1);

namespace App\Models;

use App\Presenters\UserPresenter;
use App\States\User\UserState;
use Coderflex\LaravelPresenter\Concerns\CanPresent;
use Coderflex\LaravelPresenter\Concerns\UsesPresenters;
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
use Overtrue\LaravelVote\Traits\Voter;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\ModelStates\HasStates;
use Spatie\Permission\Traits\HasRoles;

/**
 * @property int $id
 * @property bool $agrees_to_terms
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
    CanPresent,
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
    use SoftDeletes;
    use UsesPresenters;
    use Voter;

    private const array ALLOWED_EMAIL_ADDRESSES = [
        'brandon@fake.com',
        'loup@fake.com',
    ];

    private const string DOMAIN = '@metafilter.com';

    // Properties

    protected $fillable = [
        'agrees_to_terms',
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

    protected array $presenters = [
        'default' => UserPresenter::class,
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
        if (in_array($this->email, self::ALLOWED_EMAIL_ADDRESSES)) {
            return true;
        }

        return str_ends_with($this->email, self::DOMAIN);
    }

    public function toSearchableArray(): array
    {
        return ['id' => (string) $this->id] + $this->toArray();
    }

    // Builders
    /*
        public function newEloquentBuilder($query): UserQueryBuilder
        {
            return new UserQueryBuilder($query);
        }
    */
    // Relationships

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function passkeys(): HasMany
    {
        return $this->hasMany(Passkey::class);
    }

    public function getFilamentName(): string
    {
        return $this->username;
    }
}
