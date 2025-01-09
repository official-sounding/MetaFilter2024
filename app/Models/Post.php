<?php

declare(strict_types=1);

namespace App\Models;

use App\Traits\SearchTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mpociot\Versionable\VersionableTrait;
use Oddvalue\LaravelDrafts\Concerns\HasDrafts;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Tags\HasTags;

/**
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $url
 * @property string $body
 * @property string $more_inside
 * @property int $legacy_id
 * @property int $subsite_id
 * @property int $user_id
 */
final class Post extends BaseModel
{
    use HasDrafts;
    use HasFactory;
    use HasTags;
    use LogsActivity;
    use SearchTrait;
    use Sluggable;
    use SoftDeletes;
    use VersionableTrait;

    // Properties

    protected $fillable = [
        'title',
        'url',
        'body',
        'more_inside',
        'legacy_id',
        'subsite_id',
        'user_id',
    ];

    protected array $searchable = [
        'title',
        'body',
    ];

    public function sluggable(): array
    {
        return $this->getSlugFrom('title');
    }

    protected function isArchived(): Attribute
    {
        $archiveDate = now()->subDays(30);

        return Attribute::make(
            get: fn(bool $value) => $this->created_at <= $archiveDate,
        );
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }

    // Relationships

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function favorites(): MorphMany
    {
        return $this->morphMany(Favorite::class, 'favoriteable');
    }

    /*
        public function userFavorites(): HasOne
        {
            //        return $this->favorites()->one()->where('user_id', '=', auth()->id());
        }
    */
    public function flags(): MorphMany
    {
        return $this->morphMany(Flag::class, 'flaggable');
    }
    /*
        public function userFlags(): HasOne
        {
            //        return $this->flags()->one()->where('user_id', '=', auth()->id());
        }
    */
    public function next(): Post|null
    {
        return $this->orderBy('id')
            ->where('id', '>', $this->id)
            ->where('subsite_id', '=', $this->subsite_id)
            ->first();
    }

    public function previous(): Post|null
    {
        return $this->orderByDesc('id')
            ->where('id', '<', $this->id)
            ->where('subsite_id', '=', $this->subsite_id)
            ->first();
    }

    public function subsite(): BelongsTo
    {
        return $this->belongsTo(Subsite::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
