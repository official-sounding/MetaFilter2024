<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\ContactMessage;
use App\Models\User;

final class ContactMessagePolicy
{
    public function view(User $user, ContactMessage $contactMessage): bool
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

    public function update(User $user, ContactMessage $contactMessage): bool
    {
        //
    }

    public function delete(User $user, ContactMessage $contactMessage): bool
    {
        //
    }

    public function forceDelete(User $user, ContactMessage $contactMessage): bool
    {
        //
    }

    public function restore(User $user, ContactMessage $contactMessage): bool
    {
        //
    }
}
