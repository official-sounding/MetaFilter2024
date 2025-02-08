<?php

declare(strict_types=1);

namespace App\Traits;

use App\Enums\RouteNameEnum;
use App\Models\Subsite;

trait SubsiteTrait
{
    use UrlTrait;

    public function getNewPostText(): string
    {
        $subdomain = $this->getSubdomain();

        return match ($subdomain) {
            'ask' => trans('New Question'),
            'irl' => trans('New Event'),
            'projects' => trans('Add Project'),
            default => trans('New Post'),
        };
    }

    public function getEditPostText(): string
    {
        $subdomain = $this->getSubdomain();

        return match ($subdomain) {
            'ask' => trans('Edit Question'),
            'irl' => trans('Edit Event'),
            'projects' => trans('Edit Project'),
            default => trans('Edit Post'),
        };
    }

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

    public function getStylesheetName(): string
    {
        $subdomain = $this->getSubdomain();

        if ($subdomain === 'www') {
            return 'metafilter';
        }

        return $subdomain;
    }

    public function getNewPostRouteName(): string
    {
        $subdomain = $this->getSubdomain();

        return match ($subdomain) {
            'ask' => RouteNameEnum::AskMyPostsCreate->value,
            'fanfare' => RouteNameEnum::FanFareMyPostsCreate->value,
            'irl' => RouteNameEnum::IrlMyPostsCreate->value,
            'jobs' => RouteNameEnum::JobsMyPostsJobCreate->value,
            'metatalk' => RouteNameEnum::MetaTalkMyPostsCreate->value,
            'music' => RouteNameEnum::MusicMyPostsCreate->value,
            'podcast' => RouteNameEnum::PodcastMyPostsCreate->value,
            'projects' => RouteNameEnum::ProjectsMyPostsCreate->value,
            default => RouteNameEnum::MetaFilterMyPostsCreate->value,
        };
    }
}
