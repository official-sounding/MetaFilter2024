<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\User;
use App\Models\Subsite;
use Illuminate\Auth\Access\HandlesAuthorization;

final class SubsitePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
        //        return $user->can('view_any_subsite');
    }

    public function view(User $user, Subsite $subsite): bool
    {
        //        return $user->can('view_subsite');
        return true;
    }

    public function create(User $user): bool
    {
        return $user->can('create_subsite');
    }

    public function update(User $user, Subsite $subsite): bool
    {
        return $user->can('update_subsite');
    }

    public function delete(User $user, Subsite $subsite): bool
    {
        return $user->can('delete_subsite');
    }

    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_subsite');
    }

    public function forceDelete(User $user, Subsite $subsite): bool
    {
        return $user->can('force_delete_subsite');
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_subsite');
    }

    public function restore(User $user, Subsite $subsite): bool
    {
        return $user->can('restore_subsite');
    }

    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_subsite');
    }

    public function replicate(User $user, Subsite $subsite): bool
    {
        return $user->can('replicate_subsite');
    }

    public function reorder(User $user): bool
    {
        return $user->can('reorder_subsite');
    }
}
