<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\Comment;
use App\Models\Post;

trait FormRequestTrait
{
    public function loggedIn(): bool
    {
        return auth()->check() === true;
    }

    public function loggedOut(): bool
    {
        return auth()->check() === false;
    }

    public function ownsComment(Comment $comment): bool
    {
        return $comment->user_id === auth()->id();
    }

    public function ownsPost(Post $post): bool
    {
        return $post->user_id === auth()->id();
    }
}
