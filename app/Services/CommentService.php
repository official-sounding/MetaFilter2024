<?php

declare(strict_types=1);

namespace App\Services;

use App\Http\Requests\Comment\StoreCommentRequest;
use App\Http\Requests\Comment\UpdateCommentRequest;
use App\Models\Comment;
use App\Traits\LoggingTrait;

final class CommentService
{
    use LoggingTrait;

    public function store(StoreCommentRequest $request): Comment
    {
        return Comment::create($request->validated());
    }

    public function update(UpdateCommentRequest $request): bool
    {
        return Comment::update($request->validated());
    }

    public function delete(Comment $comment): bool
    {
        return $comment->delete();
    }
}
