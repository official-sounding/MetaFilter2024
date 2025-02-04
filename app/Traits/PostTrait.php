<?php

declare(strict_types=1);

namespace App\Traits;

use App\Enums\RouteNameEnum;
use App\Enums\SubsiteEnum;
use App\Models\Post;

trait PostTrait
{
    use SubsiteTrait;
    use UrlTrait;

    public function isArchived(Post $post, int $days = 30): bool
    {
        $archiveDate = now()->subDays($days);

        $postDate = $post->created_at;

        return $postDate <= $archiveDate;
    }

    public function getCanonicalUrl(Post $post): string
    {
        $subdomain = $this->getSubdomain();

        if ($subdomain = 'www') {
            $subdomain = 'metafilter';
        }

        return route("$subdomain.post.show", [
            'post' => $post,
            'slug' => $post->slug,
        ]);
    }

    public function getNewPostText(): string
    {
        return 'New Post';
    }

    public function getPostShowUrl(Post $post, bool $mine = false): string
    {
        $routeName = $mine === true ? $this->getMyShowRouteName($post) : $this->getShowRouteName($post);

        return route($routeName, [
            'post' => $post,
            'slug' => $post->slug,
        ]);
    }

    private function getShowRouteName(Post $post): string
    {
        $subdomain = $post->subsite()->value('subdomain');

        return match ($subdomain) {
            SubsiteEnum::Ask->value => RouteNameEnum::AskPostShow->value,
            SubsiteEnum::FanFare->value => RouteNameEnum::FanFarePostShow->value,
            SubsiteEnum::Irl->value => RouteNameEnum::IrlPostShow->value,
            SubsiteEnum::Jobs->value => RouteNameEnum::JobsPostShow->value,
            SubsiteEnum::MetaFilter->value => RouteNameEnum::MetaFilterPostShow->value,
            SubsiteEnum::MetaTalk->value => RouteNameEnum::MetaTalkPostShow->value,
            SubsiteEnum::Music->value => RouteNameEnum::MusicPostShow->value,
            SubsiteEnum::Podcast->value => RouteNameEnum::PodcastPostShow->value,
            SubsiteEnum::Projects->value => RouteNameEnum::ProjectsPostShow->value,
        };
    }
    private function getMyShowRouteName(Post $post): string
    {
        $subdomain = $post->subsite()->value('subdomain');

        return match ($subdomain) {
            SubsiteEnum::Ask->value => RouteNameEnum::AskMyPostShow->value,
            SubsiteEnum::FanFare->value => RouteNameEnum::FanFareMyPostShow->value,
            SubsiteEnum::Irl->value => RouteNameEnum::IrlMyPostShow->value,
            SubsiteEnum::Jobs->value => RouteNameEnum::JobsMyPostShow->value,
            SubsiteEnum::MetaFilter->value => RouteNameEnum::MetaFilterMyPostShow->value,
            SubsiteEnum::MetaTalk->value => RouteNameEnum::MetaTalkMyPostShow->value,
            SubsiteEnum::Music->value => RouteNameEnum::MusicMyPostShow->value,
            SubsiteEnum::Podcast->value => RouteNameEnum::PodcastMyPostShow->value,
            SubsiteEnum::Projects->value => RouteNameEnum::ProjectsMyPostShow->value,
        };
    }
}
