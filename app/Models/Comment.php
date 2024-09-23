<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
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
    use SoftDeletes;
    use VersionableTrait;

    // Properties

    protected $fillable = [
        'contents',
        'post_id',
        'user_id',
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
    /*
        public function userFavorites(): HasOne
        {
            //        return $this->favorites()->one()->where('user_id', '=', auth()->id());
        }
    */
    public function flags(): MorphMany
    {
        return $this->morphMany(Flag::class, 'flaggable');
    }
    /*
        public function userFlags(): HasOne
        {
            //        return $this->flags()->one()->where('user_id', '=', auth()->id());
        }
    */

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
