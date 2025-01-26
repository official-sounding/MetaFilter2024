<?php

declare(strict_types=1);

namespace App\States\User;

use App\Enums\UserStateEnum;

final class Pending extends UserState
{
    public static string|UserStateEnum $name = UserStateEnum::Pending->value;
}
