<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\ContactType;
use App\Models\User;

final class ContactTypePolicy
{
    public function view(User $user, ContactType $contactType): bool
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

    public function update(User $user, ContactType $contactType): bool
    {
        return false;
    }

    public function delete(User $user, ContactType $contactType): bool
    {
        return false;
    }

    public function forceDelete(User $user, ContactType $contactType): bool
    {
        return false;
    }

    public function restore(User $user, ContactType $contactType): bool
    {
        return false;
    }
}
