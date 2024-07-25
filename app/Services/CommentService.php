<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\CommentRepositoryInterface;

final class CommentService
{
    public function __construct(
        protected CommentRepositoryInterface $commentRepository,
    ) {}
}
