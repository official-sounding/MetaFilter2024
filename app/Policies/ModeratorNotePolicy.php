<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\ModeratorNote;
use App\Models\User;
use Illuminate\Auth\Access\Response;

final class ModeratorNotePolicy
{
    public function view(User $user, ModeratorNote $moderatorComment): bool
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

    public function update(User $user, ModeratorNote $moderatorComment): bool
    {
        //
    }

    public function delete(User $user, ModeratorNote $moderatorComment): bool
    {
        //
    }

    public function forceDelete(User $user, ModeratorNote $moderatorComment): bool
    {
        //
    }

    public function restore(User $user, ModeratorNote $moderatorComment): bool
    {
        //
    }
}
