<?php

declare(strict_types=1);

namespace App\Enums;

enum EnvironmentEnum: string
{
    case Local = 'local';
    case Production = 'production';
    case Remote = 'remote';
    case Staging = 'staging';
}
