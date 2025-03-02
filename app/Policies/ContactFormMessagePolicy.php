<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\ContactMessage;
use App\Models\User;

final class ContactFormMessagePolicy
{
    public function view(User $user, ContactMessage $contactMessage): bool
    {
        return true;
    }

    public function viewAny(User $user): bool
    {
        return $user->can('view_any_contact_form');
    }

    public function create(User $user): bool
    {
        return $user->can('create_contact_form');
    }

    public function update(User $user, ContactMessage $contactMessage): bool
    {
        return $user->can('update_contact_form');
    }

    public function delete(User $user, ContactMessage $contactMessage): bool
    {
        return $user->can('delete_contact_form');
    }

    public function forceDelete(User $user, ContactMessage $contactMessage): bool
    {
        return $user->can('force_delete_contact_form');
    }

    public function restore(User $user, ContactMessage $contactMessage): bool
    {
        return $user->can('restore_contact_form');
    }
}
