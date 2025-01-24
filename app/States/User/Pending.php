<?php

declare(strict_types=1);

namespace App\States\User;

use App\Enums\StatusEnum;

final class Pending extends UserState {
    public static string|StatusEnum $name = StatusEnum::Pending->value;
}
