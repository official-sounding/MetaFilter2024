<?php

declare(strict_types=1);

namespace App\Traits;

trait FlagTrait
{
    public function getIconPath(): string
    {
        $iconPath = $this->flagged ? 'flag-fill.svg' : 'flag.svg';

        return "images/icons/$iconPath";
    }

    public function decrementFlags(): void
    {
        $this->flags--;
    }

    public function incrementFlags(): void
    {
        $this->flags++;
    }
}
