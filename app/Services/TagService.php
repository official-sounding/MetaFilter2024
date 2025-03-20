<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Post;

final class TagService
{
    public function addTagsToPost(Post $post, string $tagInput): void
    {
        $tags = explode(separator: ' ', string: $tagInput);

        $post->attachTags($tags);
    }
}
