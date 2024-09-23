<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

final class Favorite extends BaseModel
{
    // Properties

    protected $fillable = [
        'user_id',
        'favoriteable_id',
        'favoriteable_type',
    ];

    public function favoriteable(): MorphTo
    {
        return $this->morphTo();
    }

    // Relationships

    public function comments(): MorphToMany
    {
        return $this->morphedByMany(Comment::class, 'favoriteable');
    }

    public function posts(): MorphToMany
    {
        return $this->morphedByMany(Post::class, 'favoriteable');
    }
}
