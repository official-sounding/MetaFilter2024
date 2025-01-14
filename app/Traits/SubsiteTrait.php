<?php

declare(strict_types=1);

namespace App\Traits;

trait SubsiteTrait
{
    use UrlTrait;

    public function getSubdomainFromUrl(): string
    {
        $currentUrl = url()->current();

        $urlParts = parse_url($currentUrl);

        $baseDomain = '.' . config('app.host');

        return str_replace(search: $baseDomain, replace: '', subject: $urlParts['host']);
    }

    public function getSubsiteFromUrl(): array
    {
        $subdomain = $this->getSubdomainFromUrl();

        return $this->getSubsiteBySubdomain($subdomain);
    }

    public function getSubsiteBySubdomain(string $subdomain): array
    {
        if (
            $subdomain === 'localhost' ||
            $subdomain === 'metafilter' ||
            $subdomain === 'metafilter.test' ||
            $subdomain === 'metastaging.net'
        ) {
            $subdomain = 'www';
        }

        $subsites = config('metafilter.seeders.subsites');

        return $subsites[$subdomain];
    }

    public function getStylesheetName(array $subsite): string
    {
        if ($subsite['subdomain'] === 'www') {
            return 'metafilter';
        }

        return $subsite['subdomain'];
    }
}
