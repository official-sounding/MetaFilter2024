<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * @property int $id
 * @property int $user_id
 * @property int $favoritable_id
 * @property string $favoritable_type
 */
final class Favorite extends BaseModel
{
    // Properties

    protected $fillable = [
        'user_id',
        'favoritable_id',
        'favoritable_type',
    ];

    public function favoritable(): MorphTo
    {
        return $this->morphTo();
    }

    // Relationships

    public function comments(): MorphToMany
    {
        return $this->morphedByMany(Comment::class, 'favoritable');
    }

    public function posts(): MorphToMany
    {
        return $this->morphedByMany(Post::class, 'favoritable');
    }
}
