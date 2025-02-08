<?php

declare(strict_types=1);

namespace App\Traits;

trait CacheTimeTrait
{
    public function oneHour(): int
    {
        return 60;
    }
}
