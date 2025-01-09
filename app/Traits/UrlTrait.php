<?php

declare(strict_types=1);

namespace App\Traits;

trait UrlTrait
{
    public function getDateUrl(int $targetYear): string
    {
        $url = '/' . date('Y') - $targetYear;
        $url .= date('/m/d/');

        return $url;
    }

    public function getUrlSegment(int $segment): ?string
    {
        return request()->segment($segment);
    }

    public function useSecureProtocol(string $url): string
    {
        return str_replace(search: 'http://', replace: 'https://', subject: $url);
    }
}
