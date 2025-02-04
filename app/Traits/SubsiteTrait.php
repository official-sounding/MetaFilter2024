<?php

declare(strict_types=1);

namespace App\Traits;

use App\Enums\RouteNameEnum;
use App\Models\Subsite;

trait SubsiteTrait
{
    use UrlTrait;

    public function getSubdomain(): string
    {
        $currentUrl = url()->current();

        $urlParts = parse_url($currentUrl);

        $baseDomain = '.' . config('app.host');

        return str_replace(search: $baseDomain, replace: '', subject: $urlParts['host']);
    }

    public function getSubsiteFromUrl(): ?Subsite
    {
        $subdomain = $this->getSubdomain();

        return $this->getSubsiteBySubdomain($subdomain);
    }

    public function getSubsiteBySubdomain(string $subdomain): ?Subsite
    {
        if (
            $subdomain === 'localhost' ||
            $subdomain === 'metafilter' ||
            $subdomain === 'metafilter.test' ||
            $subdomain === 'metastaging.net'
        ) {
            $subdomain = 'www';
        }

        return (new Subsite())->where('subdomain', '=', $subdomain)->first();
    }

    public function getStylesheetName(array $subsite): string
    {
        if ($subsite['subdomain'] === 'www') {
            return 'metafilter';
        }

        return $subsite['subdomain'];
    }

    public function getPostButtonText(string $subdomain): string
    {
        return match ($subdomain) {
            'ask' => trans('New Question'),
            'irl' => trans('New Event'),
            'projects' => trans('Add Project'),
            default => trans('New Post'),
        };
    }

    public function getNewPostRouteName(string $subdomain): string
    {
        /*
        if ($subdomain === 'exception') {
            // Some subsites have more than one post route
        }
        */
        return match ($subdomain) {
            'ask' => RouteNameEnum::AskMyPostsCreate->value,
            'irl' => RouteNameEnum::IrlMyPostsCreate->value,
            'projects' => RouteNameEnum::ProjectsMyPostsCreate->value,
            default => RouteNameEnum::MetaFilterMyPostsCreate->value,
        };
    }
}
