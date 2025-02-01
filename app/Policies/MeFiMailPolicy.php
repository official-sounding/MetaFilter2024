<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\MeFiMail;
use App\Models\User;
use Illuminate\Auth\Access\Response;

final class MeFiMailPolicy
{
    public function view(User $user, MeFiMail $meFiMail): bool
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

    public function update(User $user, MeFiMail $meFiMail): bool
    {
        //
    }

    public function delete(User $user, MeFiMail $meFiMail): bool
    {
        //
    }

    public function forceDelete(User $user, MeFiMail $meFiMail): bool
    {
        //
    }

    public function restore(User $user, MeFiMail $meFiMail): bool
    {
        //
    }
}
