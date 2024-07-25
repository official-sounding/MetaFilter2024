<?php

declare(strict_types=1);

namespace App\Traits;

trait SubsiteTrait
{
    use UrlTrait;

    public function getSubsiteFromUrl(): array
    {
        $subdomain = $this->getSubdomainFromUrl();

        return $this->getSubsiteBySubdomain($subdomain);
    }

    public function getSubsiteBySubdomain(string $subdomain): array
    {
        if ($subdomain === 'metafilter.test') {
            $subdomain = 'www';
        }

        // TODO: Move to settings JSON file
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
