<?php

declare(strict_types=1);

namespace App\Http\Requests\Comment;

final class UpdateCommentRequest extends StoreCommentRequest
{
    public function authorize(): bool
    {
        // TODO: Add check for user's ownership of the comment
        // TODO: Add check for permission
        return $this->loggedIn();
    }
}
