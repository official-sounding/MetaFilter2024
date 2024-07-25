<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\User;
use App\Models\Category;
use Illuminate\Auth\Access\HandlesAuthorization;

final class CategoryPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        //        return $user->can('view_any_category');
        return true;
    }

    public function view(User $user, Category $category): bool
    {
        //        return $user->can('view_category');
        return true;
    }

    public function create(User $user): bool
    {
        //        return $user->can('create_category');
        return true;
    }

    public function update(User $user, Category $category): bool
    {
        return true;

        //        return $user->can('update_category');
    }

    public function delete(User $user, Category $category): bool
    {
        //        return $user->can('delete_category');
        return true;

    }

    public function deleteAny(User $user): bool
    {
        //        return $user->can('delete_any_category');
        return true;
    }

    public function forceDelete(User $user, Category $category): bool
    {
        //        return $user->can('force_delete_category');
        return true;
    }

    public function forceDeleteAny(User $user): bool
    {
        //        return $user->can('force_delete_any_category');
        return true;

    }

    public function restore(User $user, Category $category): bool
    {
        //        return $user->can('restore_category');
        return true;

    }

    public function restoreAny(User $user): bool
    {
        //        return $user->can('restore_any_category');
        return true;
    }

    public function replicate(User $user, Category $category): bool
    {
        //        return $user->can('replicate_category');
        return true;
    }

    public function reorder(User $user): bool
    {
        //        return $user->can('reorder_category');
        return true;
    }
}
