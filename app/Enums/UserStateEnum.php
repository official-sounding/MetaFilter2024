<?php

declare(strict_types=1);

namespace App\Enums;

enum UserStateEnum: string
{
    case Active = 'active';
    case Banned = 'banned';
    case Pending = 'pending';

    public function label(): string
    {
        return match ($this) {
            self::Active => 'Active',
            self::Banned => 'Banned',
            self::Pending => 'Pending',
        };
    }
}
