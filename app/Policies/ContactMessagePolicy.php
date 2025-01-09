<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\ContactMessage;
use App\Models\User;

final class ContactMessagePolicy
{
    public function view(User $user, ContactMessage $contactMessage): bool
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

    public function update(User $user, ContactMessage $contactMessage): bool
    {
        return true;
    }

    public function delete(User $user, ContactMessage $contactMessage): bool
    {
        return true;
    }

    public function forceDelete(User $user, ContactMessage $contactMessage): bool
    {
        return true;
    }

    public function restore(User $user, ContactMessage $contactMessage): bool
    {
        return true;
    }
}
