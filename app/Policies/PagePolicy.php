<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\SimplePage;
use App\Models\User;

final class PagePolicy
{
    public function view(User $user, SimplePage $page): bool
    {
        return true;
    }

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, SimplePage $page): bool
    {
        return true;
    }

    public function delete(User $user, SimplePage $page): bool
    {
        return true;
    }

    public function forceDelete(User $user, SimplePage $page): bool
    {
        return true;
    }

    public function restore(User $user, SimplePage $page): bool
    {
        return true;
    }
}
