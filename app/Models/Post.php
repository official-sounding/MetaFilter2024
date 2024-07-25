<?php

declare(strict_types=1);

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
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
    use Sluggable;
    use SoftDeletes;

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

    // Relationships

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function next(): Post|null
    {
        return $this->orderBy('id')
            ->where('id', '>', $this->id)
            ->first();
    }

    public function previous(): Post|null
    {
        return $this->orderByDesc('id')
            ->where('id', '<', $this->id)
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
