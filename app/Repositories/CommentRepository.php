<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Comment;

final class CommentRepository extends BaseRepository implements CommentRepositoryInterface
{
    public function __construct(Comment $model)
    {
        parent::__construct($model);
    }
}
