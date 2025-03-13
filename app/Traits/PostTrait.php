<?php

declare(strict_types=1);

namespace App\Traits;

use App\Enums\RouteNameEnum;
use App\Enums\SubsiteEnum;
use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use InvalidArgumentException;

trait PostTrait
{
    use SubsiteTrait;
    use UrlTrait;

    private const int DAYS_UNTIL_ARCHIVED = 30;

    public function baseQuery(string $subdomain): Builder
    {
        $columns = $this->columns();

        return Post::query()
            ->with('user')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('subsites', 'posts.subsite_id', '=', 'subsites.id')
            ->where('subsites.subdomain', '=', $subdomain)
            ->whereNotNull('published_at')
            ->withCount([
                'comments',
                'favorites',
                'flags',
            ])
            ->select($columns);
    }

    public function columns(): array
    {
        return [
            'posts.id',
            'posts.title',
            'posts.slug',
            'posts.link_text',
            'posts.link_url',
            'posts.body',
            'posts.created_at',
            'posts.deleted_at',
            'subsites.subdomain AS subdomain',
            'subsites.name AS subsite',
            'users.id AS user_id',
            'users.username',
        ];
    }

    public function isArchived(Post $post, int $days = self::DAYS_UNTIL_ARCHIVED): bool
    {
        $archiveDate = now()->subDays($days);

        $postDate = $post->created_at;

        return $postDate <= $archiveDate;
    }

    public function getCanonicalUrl(Post $post): string
    {
        $subdomain = $this->getSubdomain();

        if ($subdomain === 'www') {
            $subdomain = 'metafilter';
        }

        return route("$subdomain.post.show", [
            'post' => $post,
            'slug' => $post->slug,
        ]);
    }

    public function getPostShowUrl(Post $post, bool $mine = false): string
    {
        $routeName = $mine === true ? $this->getMyShowRouteName($post) : $this->getShowRouteName($post);

        return route($routeName, [
            'post' => $post,
            'slug' => $post->slug,
        ]);
    }

    private function getMyShowRouteName(Post $post): string
    {
        $subdomain = $post->subsite()->value('subdomain');

        return match ($subdomain) {
            SubsiteEnum::Ask->value => RouteNameEnum::AskMyPostsShow->value,
            SubsiteEnum::FanFare->value => RouteNameEnum::FanFareMyPostsShow->value,
            SubsiteEnum::Irl->value => RouteNameEnum::IrlMyPostsShow->value,
            SubsiteEnum::Jobs->value => RouteNameEnum::JobsMyPostsShow->value,
            SubsiteEnum::MetaFilter->value => RouteNameEnum::MetaFilterMyPostsShow->value,
            SubsiteEnum::MetaTalk->value => RouteNameEnum::MetaTalkMyPostsShow->value,
            SubsiteEnum::Music->value => RouteNameEnum::MusicMyPostsShow->value,
            SubsiteEnum::Podcast->value => RouteNameEnum::PodcastMyPostsShow->value,
            SubsiteEnum::Projects->value => RouteNameEnum::ProjectsMyPostsShow->value,
            default => throw new InvalidArgumentException("Unknown subdomain: $subdomain"),
        };
    }

    private function getShowRouteName(Post $post): string
    {
        $subdomain = $post->subsite()->value('subdomain');

        return match ($subdomain) {
            SubsiteEnum::Ask->value => 'ask.posts.show',
            SubsiteEnum::BestOf->value => 'bestof.posts.show',
            SubsiteEnum::FanFare->value => 'fanfare.posts.show',
            SubsiteEnum::Irl->value => 'irl.posts.show',
            SubsiteEnum::Jobs->value => 'jobs.posts.show',
            SubsiteEnum::MetaFilter->value => 'metafilter.posts.show',
            SubsiteEnum::MetaTalk->value => 'metatalk.posts.show',
            SubsiteEnum::Music->value => 'music.posts.show',
            SubsiteEnum::Podcast->value => 'podcast.posts.show',
            SubsiteEnum::Projects->value => 'projects.posts.show',
            default => throw new InvalidArgumentException("Unknown subdomain: $subdomain"),
        };
    }
}
