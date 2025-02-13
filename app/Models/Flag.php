<?php

declare(strict_types=1);

namespace App\Models;

use App\Builders\FlagQueryBuilder;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * @property int $id
 * @property int $user_id
 * @property int $flag_reason_id
 * @property string $note
 * @property int $flaggable_id
 * @property string $flaggable_type
 */
final class Flag extends BaseModel
{
    // Properties

    protected $fillable = [
        'user_id',
        'flag_reason_id',
        'note',
        'flaggable_id',
        'flaggable_type',
    ];

    public function flaggable(): MorphTo
    {
        return $this->morphTo();
    }

    // Builders
/*
    public function newEloquentBuilder($query): FlagQueryBuilder
    {
        return new FlagQueryBuilder($query);
    }
*/
    // Relationships

    public function comments(): MorphToMany
    {
        return $this->morphedByMany(Comment::class, 'flaggable');
    }

    public function posts(): MorphToMany
    {
        return $this->morphedByMany(Post::class, 'flaggable');
    }

    public function reason(): HasOne
    {
        return $this->hasOne(FlagReason::class);
    }
}
