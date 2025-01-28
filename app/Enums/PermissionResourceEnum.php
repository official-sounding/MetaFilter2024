<?php

declare(strict_types=1);

namespace App\Enums;

use App\Models\User;

enum PermissionResourceEnum: string
{
//$model = new User;
//$table = $model->getTable();

    // TODO: Replace with models
    case Draft = 'draft';
    case Pending = 'pending';
    case Published = 'published';

    public function label(): string
    {
        return match ($this) {
            self::Draft => 'Draft',
            self::Pending => 'Pending',
            self::Published => 'Published',
        };
    }
}
