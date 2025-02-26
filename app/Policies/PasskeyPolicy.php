<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Passkey;
use App\Models\User;

final class PasskeyPolicy
{
    public function view(User $user, Passkey $passkey): bool
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

    public function update(User $user, Passkey $passkey): bool
    {
        return false;
    }

    public function delete(User $user, Passkey $passkey): bool
    {
        return false;
    }

    public function forceDelete(User $user, Passkey $passkey): bool
    {
        return false;
    }

    public function restore(User $user, Passkey $passkey): bool
    {
        return false;
    }
}
