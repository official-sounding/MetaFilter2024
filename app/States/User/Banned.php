<?php

declare(strict_types=1);

namespace App\States\User;

use App\Enums\UserStateEnum;

final class Banned extends UserState
{
    protected static string|UserStateEnum $name = UserStateEnum::Banned->value;
}
