<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\Comment;

trait CommentTrait
{
    use SubsiteTrait;

    public function ownsComment(Comment $comment): bool
    {
        return $comment->user_id === auth()->id();
    }

    public function getCommentFormNote(): ?string
    {
        $subdomain = $this->getSubdomain();

        // TODO: Get texts from subsites
        return match ($subdomain) {
            'ask' => trans('Edit Question'),
            'irl' => trans('Edit Event'),
            'projects' => trans('Edit Project'),
            default => trans('Edit Post'),
        };
    }
}
