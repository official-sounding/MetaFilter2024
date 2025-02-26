<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\AdminNote;
use App\Models\User;

final class AdminNotePolicy
{
    public function view(User $user, AdminNote $moderatorComment): bool
    {
        //
    }

    public function viewAny(User $user): bool
    {
        //
    }

    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, AdminNote $moderatorComment): bool
    {
        //
    }

    public function delete(User $user, AdminNote $moderatorComment): bool
    {
        //
    }

    public function forceDelete(User $user, AdminNote $moderatorComment): bool
    {
        //
    }

    public function restore(User $user, AdminNote $moderatorComment): bool
    {
        //
    }
}
