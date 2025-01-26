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
 * @property string $body
 * @property int $parent_id
 * @property int $reply_id
 * @property string $commentable_type
 * @property int $commentable_id
 * @property string $commenter_type
 * @property int $commenter_id
 * @property bool $approved
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
        'reply_id',
        'commentable_type',
        'commentable_id',
        'commenter_type',
        'commenter_id',
        'approved',
    ];

    protected array $searchable = [
        'text',
    ];

    protected $with = [
        'user',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }

    // Relationships

    public function favorites(): MorphMany
    {
        return $this->morphMany(Favorite::class, 'favoriteable');
    }

    public function flags(): MorphMany
    {
        return $this->morphMany(Flag::class, 'flaggable');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Comment::class);
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
