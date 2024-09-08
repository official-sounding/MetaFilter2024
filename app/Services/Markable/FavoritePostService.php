<?php

declare(strict_types=1);

namespace App\Services\Markable;

use App\Models\Post;
use App\Models\User;
use App\Traits\LoggingTrait;
use Maize\Markable\Exceptions\InvalidMarkValueException;
use Maize\Markable\Models\Favorite;

final class FavoritePostService
{
    use LoggingTrait;

    public function count(Post $post): int
    {
        return Favorite::count($post);
    }

    public function favorited(Post $post, ?User $user): bool
    {
        if ($user === null) {
            return false;
        }

        return Favorite::has($post, $user);
    }

    public function store(Post $post, User $user): void
    {
        try {
            Favorite::add($post, $user);
        } catch (InvalidMarkValueException $exception) {
            $this->logError($exception);
        }
    }

    public function delete(Post $post, User $user): void
    {
        Favorite::remove($post, $user);
    }
}
