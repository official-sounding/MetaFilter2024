<?php

declare(strict_types=1);

namespace App\Services;

use App\Dto\CommentDto;
use App\Http\Requests\Comment\UpdateCommentRequest;
use App\Models\Comment;
use App\Traits\LoggingTrait;
use Exception;

final class CommentService
{
    use LoggingTrait;

    public function store(CommentDto $dto): ?Comment
    {
        try {
            return Comment::create((array) $dto);
        } catch (Exception $exception) {
            $this->logError($exception);

            return null;
        }
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
