<?php

declare(strict_types=1);

namespace App\Traits;

trait RssTrait
{
    public function getRssUrl(string $subdomain): string
    {
        $rssBaseUrl = config('app.rss_url');

        return $rssBaseUrl . $subdomain . '.rss';
    }
}
