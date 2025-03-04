<?php

declare (strict_types=1);

namespace App\Traits;

use Carbon\Carbon;
use Spatie\Sitemap\Tags\Url;

trait SitemapTrait
{
    public function getSitemapUrl(string $routeName, string $updatedAt, ?float $priority = 0.1): Url
    {
        return Url::create(route(name: $routeName, parameters: $this))
            ->setLastModificationDate(lastModificationDate: Carbon::create($updatedAt))
            ->setChangeFrequency(changeFrequency: Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority($priority);
    }
}
