<?php

declare(strict_types=1);

namespace App\Enums;

enum StatusEnum: string
{
    case Active = 'Active';
    case AddingCommentFailed = 'Adding comment failed';
    case AddingPostFailed = 'Adding post failed';
    case Banned = 'Banned';
    case CommentAdded = 'Comment added';
    case Deleted = 'deleted';
    case Draft = 'draft';
    case Failure = 'failure';
    case PasswordUpdated = 'password-updated';
    case Pending = 'pending';
    case PostAdded = 'Post added';
    case ProfileDeleted = 'profile-deleted';
    case ProfileUpdated = 'profile-updated';
    case Published = 'published';
    case Success = 'success';
    case VerificationLinkSent = 'verification-link-sent';
}
