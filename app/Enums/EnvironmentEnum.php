<?php

declare(strict_types=1);

namespace App\Enums;

enum EnvironmentEnum: string
{
    case LOCAL = 'local';
    case PRODUCTION = 'production';
    case REMOTE = 'remote';
    case TEST = 'test';
}
