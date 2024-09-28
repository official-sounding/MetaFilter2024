<?php

declare(strict_types=1);

namespace App\Enums;

enum LivewireEventEnum: string
{
    case CommentAdded = 'comment-added';
    case FavoriteAdded = 'favorite-added';
    case FavoriteRemoved = 'favorite-removed';
    case CommentFlagAdded = 'comment-flag-added';
    case PostFlagAdded = 'post-flag-added';
    case HideFlagCommentForm = 'hide-flag-comment-form';
    case ToggleFlagCommentForm = 'toggle-flag-comment-form';
    case ToggleFlagPostForm = 'toggle-flag-post-form';
}
