<?php

declare(strict_types=1);

namespace App\Models;

use App\Traits\SearchTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mpociot\Versionable\VersionableTrait;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * @property int $id
 * @property string $text
 * @property int $parent_id
 * @property int $post_id
 * @property int $user_id
 * @property User $user
 */
final class Comment extends BaseModel
{
    use HasFactory;
    use LogsActivity;
    use SearchTrait;
    use SoftDeletes;
    use VersionableTrait;

    // Properties

    protected $fillable = [
        'text',
        'parent_id',
        'post_id',
        'user_id',
    ];

    protected array $searchable = [
        'text',
    ];

    public function getActivityLogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }

    // Builders
    /*
        public function newEloquentBuilder($query): CommentQueryBuilder
        {
            return new CommentQueryBuilder($query);
        }
    */

    // Relationships

    public function favorites(): MorphMany
    {
        return $this->morphMany(Favorite::class, 'favoritable');
    }

    public function flags(): MorphMany
    {
        return $this->morphMany(Flag::class, 'flaggable');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function replies(): HasMany
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
