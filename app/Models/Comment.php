<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
 * @property string $contents
 * @property int $post_id
 * @property int $user_id
 */
final class Comment extends BaseModel
{
    use HasFactory;
    use HasTags;
    use LogsActivity;
    use Markable;
    use SoftDeletes;
    use VersionableTrait;

    // Properties

    protected $fillable = [
        'contents',
        'post_id',
        'user_id',
    ];

    protected static array $marks = [
        Favorite::class,
        Reaction::class,
    ];

    protected $with = [
        'user',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }

    // Relationships

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
