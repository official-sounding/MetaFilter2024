<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\User;

trait UserTrait
{
    public function getUserById(int $userId): User
    {
        return User::findOrFail($userId);
    }
}
