<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $admin_id
 * @property int $watchable_id
 * @property string $watchable_type
 */
final class AdminWatch extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    // Properties

    protected $fillable = [
        'admin_id',
        'watchable_id',
        'watchable_type',
    ];

    // Relationships

    public function admin(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
        );
    }

    public function comments(): MorphToMany
    {
        return $this->morphedByMany(
            related: Comment::class,
            name: 'watchable',
        );
    }

    public function posts(): MorphToMany
    {
        return $this->morphedByMany(
            related: Post::class,
            name: 'watchable',
        );
    }
}
