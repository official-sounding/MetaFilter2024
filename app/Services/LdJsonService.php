<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Post;
use Spatie\SchemaOrg\Schema;

final class LdJsonService
{
    public function getBlogPosting(Post $post): string
    {
        $blogPosting = Schema::blogPosting()
            ->headline($post->title)
            ->datePublished($post->created_at)
            ->dateModified($post->updated_at)
            ->author($post->user->username)
            ->mainEntityOfPage($post->url)
            ->articleBody($post->body . $post->more_inside);

        return $blogPosting->toScript();
    }

    public function getWebPage(string $title, string $description, string $url): string
    {
        $webPage = Schema::webPage()
            ->name($title)
            ->description($description)
            ->url($url);

        return $webPage->toScript();
    }
}
