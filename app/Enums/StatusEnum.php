<?php

declare(strict_types=1);

namespace App\Enums;

enum StatusEnum: string
{
    case Failure = 'failure';
    case Success = 'success';
    case CommentAdded = 'Comment added';
    case AddingCommentFailed = 'Adding comment failed';
    case PasswordUpdated = 'password-updated';
    case ProfileDeleted = 'profile-deleted';
    case ProfileUpdated = 'profile-updated';
    case VerificationLinkSent = 'verification-link-sent';
    case PostAdded = 'Post added';
    case AddingPostFailed = 'Adding post failed';
}
