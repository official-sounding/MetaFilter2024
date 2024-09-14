<?php

declare(strict_types=1);

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Maize\Markable\Markable;
use Maize\Markable\Models\Favorite;
use Maize\Markable\Models\Reaction;
use Mpociot\Versionable\VersionableTrait;
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
    use HasFactory;
    use HasTags;
    use LogsActivity;
    use Markable;
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

    protected static array $marks = [
        Favorite::class,
        Reaction::class,
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
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
