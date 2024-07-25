<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $contents
 * @property int $post_id
 * @property int $user_id
 */
final class Comment extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    // Properties

    protected $fillable = [
        'contents',
        'post_id',
        'user_id',
    ];

    protected $with = [
        'user',
    ];

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
