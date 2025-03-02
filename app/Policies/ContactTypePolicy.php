<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\ContactType;
use App\Models\User;

final class ContactTypePolicy
{
    public function view(User $user, ContactType $contactType): bool
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

    public function update(User $user, ContactType $contactType): bool
    {
        //
    }

    public function delete(User $user, ContactType $contactType): bool
    {
        //
    }

    public function forceDelete(User $user, ContactType $contactType): bool
    {
        //
    }

    public function restore(User $user, ContactType $contactType): bool
    {
        //
    }
}
