<?php

declare(strict_types=1);

namespace App\States\User;

use App\Enums\UserStatusEnum;

final class Pending extends UserState
{
    public static string|UserStatusEnum $name = UserStatusEnum::Pending->value;
}
