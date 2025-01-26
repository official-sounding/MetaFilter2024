<?php

declare(strict_types=1);

namespace App\Enums;

enum UserStateEnum: string
{
    case Active = 'active';
    case Banned = 'banned';
    case Pending = 'pending';
}
