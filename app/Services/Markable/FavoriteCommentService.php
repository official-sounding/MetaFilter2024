<?php

declare(strict_types=1);

namespace App\Services\Markable;

use App\Models\Comment;
use App\Models\User;
use App\Traits\LoggingTrait;
use Maize\Markable\Exceptions\InvalidMarkValueException;
use Maize\Markable\Models\Favorite;

final class FavoriteCommentService
{
    use LoggingTrait;

    public function count(Comment $comment): int
    {
        return Favorite::count($comment);
    }

    public function favorited(Comment $comment, ?User $user): bool
    {
        if ($user === null) {
            return false;
        }

        return Favorite::has($comment, $user);
    }

    public function store(Comment $comment, User $user): void
    {
        try {
            Favorite::add($comment, $user);
        } catch (InvalidMarkValueException $exception) {
            $this->logError($exception);
        }
    }

    public function delete(Comment $comment, User $user): void
    {
        Favorite::remove($comment, $user);
    }
}
