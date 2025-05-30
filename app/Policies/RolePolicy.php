<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Auth\Access\HandlesAuthorization;

final class RolePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
        //        return $user->can('view_any_role');
    }

    public function view(User $user, Role $role): bool
    {
        return true;
        //        return $user->can('view_role');
    }

    public function create(User $user): bool
    {
        return true;
        //        return $user->can('create_role');
    }

    public function update(User $user, Role $role): bool
    {
        return true;
        //        return $user->can('update_role');
    }

    public function delete(User $user, Role $role): bool
    {
        return true;
        //        return $user->can('delete_role');
    }

    public function deleteAny(User $user): bool
    {
        return true;
        //        return $user->can('delete_any_role');
    }

    public function forceDelete(User $user, Role $role): bool
    {
        return true;
        //        return $user->can('{{ ForceDelete }}');
    }

    public function forceDeleteAny(User $user): bool
    {
        return true;
        //        return $user->can('{{ ForceDeleteAny }}');
    }

    public function restore(User $user, Role $role): bool
    {
        return true;
        //        return $user->can('{{ Restore }}');
    }

    public function restoreAny(User $user): bool
    {
        return true;
        //        return $user->can('{{ RestoreAny }}');
    }

    public function replicate(User $user, Role $role): bool
    {
        return true;
        //        return $user->can('{{ Replicate }}');
    }

    public function reorder(User $user): bool
    {
        return true;
        //        return $user->can('{{ Reorder }}');
    }
}
