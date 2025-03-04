<?php

declare(strict_types=1);

namespace App\Models;

use App\Builders\CommentQueryBuilder;
use App\Enums\RouteNameEnum;
use App\Traits\SearchTrait;
use App\Traits\SitemapTrait;
use App\Traits\SubsiteTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mpociot\Versionable\VersionableTrait;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

/**
 * @property int $id
 * @property string $text
 * @property int $parent_id
 * @property int $post_id
 * @property int $user_id
 * @property User $user
 */
final class Comment extends BaseModel implements Sitemapable
{
    use HasFactory;
    use LogsActivity;
    use SearchTrait;
    use SitemapTrait;
    use SoftDeletes;
    use SubsiteTrait;
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

    public function toSitemapTag(): Url
    {
        $routeName = $this->getShowPostRouteName();

        return $this->getSitemapUrl(
            $routeName,
            $this->updated_at,
        );
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
