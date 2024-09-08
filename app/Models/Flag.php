<?php

declare(strict_types=1);

namespace App\Models;

use Maize\Markable\Mark;

final class Flag extends Mark
{
    public static function markableRelationName(): string
    {
        return 'flaggers';
    }

    public static function markRelationName(): string
    {
        return 'flags';
    }
}
