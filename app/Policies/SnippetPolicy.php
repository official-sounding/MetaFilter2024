<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Snippet;
use App\Models\User;

final class SnippetPolicy
{
    public function view(User $user, Snippet $snippet): bool
    {
        return true;
    }

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        //        return $user->can('create_snippet');
        return true;

    }

    public function update(User $user, Snippet $snippet): bool
    {
        //    return $user->can('update_snippet');
        return true;
    }

    public function delete(User $user, Snippet $snippet): bool
    {
        //        return $user->can('delete_snippet');
        return true;
    }

    public function forceDelete(User $user, Snippet $snippet): bool
    {
        //        return $user->can('force_delete_snippet');
        return true;
    }

    public function restore(User $user, Snippet $snippet): bool
    {
        //        return $user->can('restore_snippet');
        return true;
    }
}
