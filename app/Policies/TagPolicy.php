<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Tag;
use App\Models\User;

final class TagPolicy
{
    public function view(User $user, Tag $tag): bool
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

    public function update(User $user, Tag $tag): bool
    {
        return false;
    }

    public function delete(User $user, Tag $tag): bool
    {
        return false;
    }

    public function forceDelete(User $user, Tag $tag): bool
    {
        return false;
    }

    public function restore(User $user, Tag $tag): bool
    {
        return false;
    }
}
