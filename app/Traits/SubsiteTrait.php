<?php

declare(strict_types=1);

namespace App\Traits;

use App\Enums\RouteNameEnum;
use App\Models\Subsite;

trait SubsiteTrait
{
    use LoggingTrait;
    use UrlTrait;

    public function getFullUrl(string $subdomain)
    {
        $host = config('app.host');

        return $subdomain . $host;
    }

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

    public function getPreviewPostText(): string
    {
        $subdomain = $this->getSubdomain();

        return match ($subdomain) {
            'ask' => trans('Preview Question'),
            'irl' => trans('Preview Event'),
            'projects' => trans('Preview Project'),
            default => trans('Preview Post'),
        };
    }

    public function getSubdomain(): string
    {
        $currentUrl = url()->current();
        $urlParts = parse_url($currentUrl);
        $host = $urlParts['host'];

        $baseDomain = '.' . config('app.host');
        $subdomain = str_replace($baseDomain, '', $host);

        if ($subdomain === 'metafilter') {
            return 'www';
        }

        return $subdomain;
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

    public function getPostIndexRouteName(string $subdomain = ''): string
    {
        if ($subdomain === '') {
            $subdomain = $this->getSubdomain();
        }

        return match ($subdomain) {
            'ask' => 'ask.posts.index',
            'fanfare' => 'fanfare.posts.index',
            'irl' => 'irl.posts.index',
            'metatalk' => 'metatalk.posts.index',
            'music' => 'music.posts.index',
            'podcast' => 'podcast.posts.index',
            'projects' => 'projects.posts.index',
            default => 'metafilter.posts.index',
        };
    }

    public function getShowPostRouteName(): string
    {
        $subdomain = $this->getSubdomain();

        return match ($subdomain) {
            'ask' => 'ask.posts.show',
            'fanfare' => 'fanfare.posts.show',
            'irl' => 'irl.posts.show',
            'metatalk' => 'metatalk.posts.show',
            'music' => 'music.posts.show',
            'podcast' => 'podcast.posts.show',
            'projects' => 'projects.posts.show',
            default => 'metafilter.posts.show',
        };
    }

    public function getStorePostRouteName(): string
    {
        $subdomain = $this->getSubdomain();

        return match ($subdomain) {
            'ask' => RouteNameEnum::AskMyPostsStore->value,
            'fanfare' => RouteNameEnum::FanFareMyPostsStore->value,
            'irl' => RouteNameEnum::IrlMyPostsStore->value,
            'metatalk' => RouteNameEnum::MetaTalkMyPostsStore->value,
            'music' => RouteNameEnum::MusicMyPostsStore->value,
            'podcast' => RouteNameEnum::PodcastMyPostsStore->value,
            'projects' => RouteNameEnum::ProjectsMyPostsStore->value,
            default => RouteNameEnum::MetaFilterMyPostsStore->value,
        };
    }
}
