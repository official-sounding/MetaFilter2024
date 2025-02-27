<?php

declare(strict_types=1);

namespace App\Services;

use App\Dtos\PostDto;
use App\Models\Post;
use App\Repositories\PostRepositoryInterface;
use App\Traits\LoggingTrait;
use Exception;

final readonly class PostService
{
    use LoggingTrait;

    public function __construct(
        protected PostRepositoryInterface $postRepository,
        protected PurifierService $purifierService,
    ) {}

    public function closePost(Post $post): void
    {
        $this->postRepository->closePost($post);
    }

    public function store(PostDto $dto): ?Post
    {
        try {
            $data = [
                'title' => $this->purifierService->clean($dto->title) ?? null,
                'link_url' => $this->purifierService->clean($dto->link_url) ?? null,
                'link_text' => $this->purifierService->clean($dto->link_text) ?? null,
                'body' => $this->purifierService->clean($dto->body) ?? null,
                'more_inside' => $this->purifierService->clean($dto->more_inside) ?? null,
                'user_id' => $dto->user_id,
                'subsite_id' => $dto->subsite_id,
                'state' => $dto->state,
                'published_at' => $dto->published_at,
                'is_published' => $dto->is_published,
            ];

            return $this->postRepository->create($data);
        } catch (Exception $exception) {
            $this->logError($exception);

            return null;
        }
    }

    public function update(int $id, array $data): bool
    {
        return $this->postRepository->update($id, $data);
    }

    public function delete(int $id): bool
    {
        return $this->postRepository->delete($id);
    }
}
