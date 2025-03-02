<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Faq;
use App\Models\User;

final class FaqPolicy
{
    public function view(User $user, Faq $faq): bool
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

    public function update(User $user, Faq $faq): bool
    {
        return false;
    }

    public function delete(User $user, Faq $faq): bool
    {
        return false;
    }

    public function forceDelete(User $user, Faq $faq): bool
    {
        return false;
    }

    public function restore(User $user, Faq $faq): bool
    {
        return false;
    }
}
