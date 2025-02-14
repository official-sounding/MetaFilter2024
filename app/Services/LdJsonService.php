<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Post;
use App\Traits\LoggingTrait;
use DateMalformedStringException;
use DateTime;
use Spatie\SchemaOrg\Schema;

final class LdJsonService
{
    use LoggingTrait;

    public function getBlogPosting(Post $post): string
    {
        try {
            $dateModified = new DateTime($post->updated_at);
            $datePublished = new DateTime($post->created_at);
        } catch (DateMalformedStringException $exception) {
            $this->logError($exception);

            $dateModified = new DateTime();
            $datePublished = new DateTime();
        }

        $blogPosting = Schema::blogPosting()
            ->headline($post->title)
            ->datePublished($datePublished)
            ->dateModified($dateModified)
            ->author($post->user->username)
            // TODO: Get canonical URL
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
