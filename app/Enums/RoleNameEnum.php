<?php

declare(strict_types=1);

namespace App\Enums;

enum RoleNameEnum: string
{
    case DEVELOPER = 'developer';
    case MODERATOR = 'moderator';

    public function label(): string
    {
        return match ($this) {
            RoleNameEnum::DEVELOPER => 'Developers',
            RoleNameEnum::MODERATOR => 'Moderators',
        };
    }
}
