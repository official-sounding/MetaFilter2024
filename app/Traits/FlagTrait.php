<?php

declare(strict_types=1);

namespace App\Traits;

trait FlagTrait
{
    public function getIconPath(bool $userFlagged): string
    {
        $iconPath = $userFlagged ? 'flag-fill.svg' : 'flag.svg';

        return "images/icons/$iconPath";
    }

    public function decrementFlagCount(): void
    {
        $this->flagCount--;
    }

    public function incrementFlagCount(): void
    {
        $this->flagCount++;
    }
}
