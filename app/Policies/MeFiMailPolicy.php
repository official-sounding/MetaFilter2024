<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\MeFiMail;
use App\Models\User;

final class MeFiMailPolicy
{
    public function view(User $user, MeFiMail $meFiMail): bool
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

    public function update(User $user, MeFiMail $meFiMail): bool
    {
        return false;
    }

    public function delete(User $user, MeFiMail $meFiMail): bool
    {
        return false;
    }

    public function forceDelete(User $user, MeFiMail $meFiMail): bool
    {
        return false;
    }

    public function restore(User $user, MeFiMail $meFiMail): bool
    {
        return false;
    }
}
