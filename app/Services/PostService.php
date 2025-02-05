<?php

declare(strict_types=1);

namespace App\Services;

use App\Dtos\PostDto;
use App\Models\Post;

final readonly class PostService
{
    public function __construct(private PurifierService $purifierService) {}

    public function store(PostDto $dto): Post
    {
        $post = new Post();

        $post->title = $this->purifierService->clean($dto->title);
        $post->body = $this->purifierService->clean($dto->body);
        $post->more_inside = $this->purifierService->clean($dto->more_inside);
        $post->subsite_id = $dto->subsite_id;
        $post->state = $dto->state;
        $post->published_at = $dto->published_at;
        $post->is_published = $dto->is_published;

        return $post;
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
