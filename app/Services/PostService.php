<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Post;
use App\Repositories\PostRepositoryInterface;
use App\Traits\LoggingTrait;
use Exception;

final class PostService
{
    use LoggingTrait;

    public function __construct(protected PostRepositoryInterface $postRepository) {}

    public function store(array $data): ?Post
    {
        try {
            return $this->postRepository->create($data);
        } catch (Exception $exception) {
            $this->logError($exception);

            return null;
        }
    }

    public function update(Post $post, array $data): bool
    {
        try {
            $this->postRepository->update($post->id, $data);

            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }

    public function delete(Post $post): bool
    {
        try {
            $this->postRepository->delete($post->id);

            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }
}
