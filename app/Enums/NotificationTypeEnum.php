<?php

declare(strict_types=1);

namespace App\Enums;

enum NotificationTypeEnum: string
{
    case Error = 'error';
    case Info = 'info';
    case Success = 'success';
    case Warning = 'warning';
}
