<?php

declare(strict_types=1);

namespace App\Enums;

enum StatusEnum: string
{
    case AddingCommentFailed = 'Adding comment failed';
    case AddingPostFailed = 'Adding post failed';
    case CommentAdded = 'Comment added';
    case Deleted = 'deleted';
    case Failure = 'failure';
    case PasswordUpdated = 'password-updated';
    case PostAdded = 'Post added';
    case ProfileDeleted = 'profile-deleted';
    case ProfileUpdated = 'profile-updated';
    case Success = 'success';
    case VerificationLinkSent = 'verification-link-sent';

    public function label(): string
    {
        return match ($this) {
            self::Active => 'Active',
        };
    }
}
