<?php

declare(strict_types=1);

namespace App\Enums;

enum NotificationMessageEnum: string
{
    case PostDraftSuccess = 'Your post has been saved as a draft';
    case PostDraftFailure = 'Sorry, something went wrong saving your post';
    case PostPublishSuccess = 'Your post has been published';
    case PostPublishFailure = 'Sorry, something went wrong publishing your post';
}
