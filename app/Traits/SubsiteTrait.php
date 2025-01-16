<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\Subsite;

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

    public function getSubsiteFromUrl(): Subsite
    {
        $subdomain = $this->getSubdomainFromUrl();

        return $this->getSubsiteBySubdomain($subdomain);
    }

    public function getSubsiteBySubdomain(string $subdomain): Subsite
    {
        if (
            $subdomain === 'localhost' ||
            $subdomain === 'metafilter' ||
            $subdomain === 'metafilter.test' ||
            $subdomain === 'metastaging.net'
        ) {
            $subdomain = 'www';
        }

        return Subsite::where('subdomain', '=', $subdomain)->first();
    }

    public function getStylesheetName(array $subsite): string
    {
        if ($subsite['subdomain'] === 'www') {
            return 'metafilter';
        }

        return $subsite['subdomain'];
    }
}
