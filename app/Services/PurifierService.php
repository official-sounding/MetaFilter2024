<?php

declare(strict_types=1);

namespace App\Services;

use Mews\Purifier\Facades\Purifier;

final class PurifierService
{
    public function clean(string $string): string
    {
        return Purifier::clean($string);
    }
}
