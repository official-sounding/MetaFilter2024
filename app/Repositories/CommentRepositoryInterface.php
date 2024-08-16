<?php

declare(strict_types=1);

namespace App\Repositories;

interface CommentRepositoryInterface extends BaseRepositoryInterface
{
    public function getCommentByUserId(int $userId);
}
