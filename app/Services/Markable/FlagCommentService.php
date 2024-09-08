<?php

declare(strict_types=1);

namespace App\Services\Markable;

use App\Models\Flag;
use App\Models\Comment;
use App\Models\User;
use App\Traits\LoggingTrait;
use Maize\Markable\Exceptions\InvalidMarkValueException;

final class FlagCommentService
{
    use LoggingTrait;

    public function count(Comment $comment): int
    {
        return Flag::count($comment);
    }

    public function flagged(Comment $comment, ?User $user): bool
    {
        if ($user === null) {
            return false;
        }

        return Flag::has($comment, $user);
    }

    public function store(Comment $comment, User $user, string $reason = null): void
    {
        try {
            Flag::add($comment, $user, $reason);
        } catch (InvalidMarkValueException $exception) {
            $this->logError($exception);
        }
    }

    public function delete(Comment $comment, User $user): void
    {
        Flag::remove($comment, $user);
    }

    public function toggle(Comment $comment, User $user): void
    {
        Flag::toggle($comment, $user);
    }
}
