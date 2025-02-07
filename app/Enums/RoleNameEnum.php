<?php

declare(strict_types=1);

namespace App\Enums;

enum RoleNameEnum: string
{
    case BOARD_MEMBER = 'board member';
    case DEVELOPER = 'developer';
    case MODERATOR = 'moderator';

    public function label(): string
    {
        return match ($this) {
            RoleNameEnum::BOARD_MEMBER => 'Board Member',
            RoleNameEnum::DEVELOPER => 'Developers',
            RoleNameEnum::MODERATOR => 'Moderators',
        };
    }
}
