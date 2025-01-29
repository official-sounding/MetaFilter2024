<?php

declare(strict_types=1);

namespace App\Enums;

enum PermissionEnum: string
{
    case AccessPanel = 'access_panel';

    public function label(): string
    {
        return match ($this) {
            self::AccessPanel => 'Access Panel',
        };
    }
}
