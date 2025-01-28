<?php

declare(strict_types=1);

namespace App\Enums;

enum EnvironmentEnum: string
{
    case Local = 'local';
    case Production = 'production';
    case Remote = 'remote';
    case Staging = 'staging';

    public function label(): string
    {
        return match ($this) {
            self::Local => 'Local',
            self::Production => 'Production',
            self::Remote => 'Remote',
            self::Staging => 'Staging',
        };
    }
}
