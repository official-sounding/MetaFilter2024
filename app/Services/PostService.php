<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Post;
use App\Traits\LoggingTrait;

final class PostService
{
    use LoggingTrait;

    public function store(array $data): Post
    {
        return Post::create($data);
    }

    public function update(array $data): bool
    {
        $post = Post::find($data['id']);

        return $post->update($data);
    }

    public function delete(Post $post): bool
    {
        return $post->delete();
    }
}
