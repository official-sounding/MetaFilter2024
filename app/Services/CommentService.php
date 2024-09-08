<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\CommentRepositoryInterface;
use App\Traits\LoggingTrait;
use Exception;

final class CommentService
{
    use LoggingTrait;

    public function __construct(
        protected CommentRepositoryInterface $commentRepository,
    ) {}

    public function store(array $data): bool
    {
        try {
            $this->commentRepository->create($data);

            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }
}
