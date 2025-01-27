<?php

declare(strict_types=1);

namespace App\Enums;

enum PostStateEnum: string
{
    case Draft = 'draft';
    case Pending = 'pending';
    case Published = 'published';
}
