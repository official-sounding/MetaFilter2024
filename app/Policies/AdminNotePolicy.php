<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\AdminNote;
use App\Models\User;

final class AdminNotePolicy
{
    public function view(User $user, AdminNote $moderatorComment): bool
    {
        return false;
    }

    public function viewAny(User $user): bool
    {
        return false;
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, AdminNote $moderatorComment): bool
    {
        return false;
    }

    public function delete(User $user, AdminNote $moderatorComment): bool
    {
        return false;
    }

    public function forceDelete(User $user, AdminNote $moderatorComment): bool
    {
        return false;
    }

    public function restore(User $user, AdminNote $moderatorComment): bool
    {
        return false;
    }
}
