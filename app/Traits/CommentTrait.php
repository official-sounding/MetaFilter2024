<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\Comment;

trait CommentTrait
{
    public function ownsComment(Comment $comment): bool
    {
        return $comment->user_id === auth()->id();
    }
}
