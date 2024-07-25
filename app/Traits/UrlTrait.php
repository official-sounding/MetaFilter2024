<?php

declare(strict_types=1);

namespace App\Traits;

trait UrlTrait
{
    public function getSubdomainFromUrl(): string
    {
        $currentUrl = url()->current();

        $urlParts = parse_url($currentUrl);

        $baseDomain = '.' . config('app.host');

        return str_replace(search: $baseDomain, replace: '', subject: $urlParts['host']);
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
