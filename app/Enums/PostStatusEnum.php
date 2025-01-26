<?php

declare(strict_types=1);

namespace App\Enums;
enum PostStatusEnum: string
{
    case Draft = 'draft';
    case Pending = 'pending';
    case Published = 'published';
}
