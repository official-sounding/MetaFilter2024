<?php

declare(strict_types=1);

namespace App\Enums;

enum MessageStatusEnum: string
{
    case FAILURE = 'failure';
    case SUCCESS = 'success';
}
