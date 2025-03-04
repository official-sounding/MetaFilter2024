<?php

declare(strict_types=1);

namespace App\Models;

use App\Builders\FaqQueryBuilder;
use App\Traits\SitemapTrait;
use App\Traits\SubsiteTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

/**
 * @property int $id
 * @property string $question
 * @property string $slug
 * @property string $answer
 * @property int $legacy_id
 * @property int $subsite_id
 */
final class Faq extends BaseModel implements Sitemapable
{
    use HasFactory;
    use Sluggable;
    use SitemapTrait;
    use SubsiteTrait;

    // Properties

    protected $fillable = [
        'question',
        'answer',
        'legacy_id',
        'subsite_id',
    ];

    public function sluggable(): array
    {
        return $this->getSlugFrom('question');
    }

    // Builders
    /*
        public function newEloquentBuilder($query): FaqQueryBuilder
        {
            return new FaqQueryBuilder($query);
        }*/

    public function toSitemapTag(): Url
    {
        $routeName = $this->getShowPostRouteName();

        return $this->getSitemapUrl(
            $routeName,
            $this->updated_at,
        );
    }
}
