<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Faq;
use App\Models\User;

final class FaqPolicy
{
    public function view(User $user, Faq $faq): bool
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

    public function update(User $user, Faq $faq): bool
    {
        //
    }

    public function delete(User $user, Faq $faq): bool
    {
        //
    }

    public function forceDelete(User $user, Faq $faq): bool
    {
        //
    }

    public function restore(User $user, Faq $faq): bool
    {
        //
    }
}
