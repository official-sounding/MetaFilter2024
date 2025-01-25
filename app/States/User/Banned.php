<?php

declare(strict_types=1);

namespace App\States\User;

use App\Enums\StatusEnum;

final class Banned extends UserState
{
    protected static string|StatusEnum $name = StatusEnum::Banned->value;
}
