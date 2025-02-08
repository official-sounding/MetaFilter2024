<?php

declare(strict_types=1);

namespace App\Traits;

trait IconTrait
{
    public function getIconPath(string $iconFilename): string
    {
        return "images/icons/$iconFilename.svg";
    }
}
