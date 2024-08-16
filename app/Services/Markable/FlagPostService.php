<?php

declare(strict_types=1);

namespace App\Services\Markable;

use App\Models\Flag;
use App\Models\Post;
use App\Models\User;
use App\Traits\LoggingTrait;
use Maize\Markable\Exceptions\InvalidMarkValueException;

final class FlagPostService
{
    use LoggingTrait;

    public function count(Post $post): int
    {
        return Flag::count($post);
    }

    public function flagged(Post $post, User $user): bool
    {
        return Flag::has($post, $user);
    }

    public function store(Post $post, User $user, string $reason): void
    {
        try {
            Flag::add($post, $user, $reason);
        } catch (InvalidMarkValueException $exception) {
            $this->logError($exception);
        }
    }

    public function delete(Post $post, User $user): void
    {
        Flag::remove($post, $user);
    }
}
