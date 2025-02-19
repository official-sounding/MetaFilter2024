<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Collection;

final class CommentRepository extends BaseRepository implements CommentRepositoryInterface
{
    public function __construct(Comment $model)
    {
        parent::__construct($model);
    }

    public function getCommentByUserId(int $userId): int
    {
        return $this->model
            ->where('user_id', '=', $userId)
            ->count();
    }

    public function getCommentsByPostId(int $postId): Collection
    {
        return $this->model->newQuery()
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->select([
                'comments.id',
                'comments.user_id',
                'comments.text',
                'comments.created_at',
                'users.username',
            ])
            ->with([
                'user',
            ])
            ->withCount([
                'favorites',
                'flags',
            ])

            ->where('comments.post_id', '=', $postId)
            ->orderBy('comments.created_at')
            ->get();
    }
}
