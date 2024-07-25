<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Auth\Access\HandlesAuthorization;

final class CommentPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Comment $comment): bool
    {
        return $user->can('view_comment');
    }

    public function create(User $user): bool
    {
        return $user->can('create_comment');
    }

    public function update(User $user, Comment $comment): bool
    {
        return $user->can('update_comment');
    }

    public function delete(User $user, Comment $comment): bool
    {
        return $user->can('delete_comment');
    }

    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_comment');
    }

    public function forceDelete(User $user, Comment $comment): bool
    {
        return $user->can('force_delete_comment');
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_comment');
    }

    public function restore(User $user, Comment $comment): bool
    {
        return $user->can('restore_comment');
    }

    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_comment');
    }

    public function replicate(User $user, Comment $comment): bool
    {
        return $user->can('replicate_comment');
    }

    public function reorder(User $user): bool
    {
        return $user->can('reorder_comment');
    }
}
