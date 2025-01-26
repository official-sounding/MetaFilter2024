<?php

declare(strict_types=1);

namespace App\States\User;

use App\Enums\UserStatusEnum;

final class Active extends UserState
{
    protected static string|UserStatusEnum $name = UserStatusEnum::Active->value;
}
