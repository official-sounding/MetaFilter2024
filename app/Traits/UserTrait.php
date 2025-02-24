<?php

declare(strict_types=1);

namespace App\Traits;

use App\Enums\RouteNameEnum;
use App\Models\User;

trait UserTrait
{
    public function getProfileUrl(User $user): string
    {
        return route(RouteNameEnum::MemberShow->value, [
            'user' => $user,
        ]);
    }

    public function getUserById(int $userId): User
    {
        return User::findOrFail($userId);
    }
}
