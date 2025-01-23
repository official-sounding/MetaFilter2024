<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Post;
use App\Traits\LoggingTrait;

final class PostService
{
    use LoggingTrait;

    private PurifierService $purifierService;

    public function __construct(PurifierService $purifierService) {}

    public function store(array $data): Post
    {
        $body = $this->purifierService->clean($data['body']);
        $moreInside = $this->purifierService->clean($data['more_inside']);
        $title = $this->purifierService->clean($data['title']);

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
