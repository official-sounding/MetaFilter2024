<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Models\User;
use Livewire\Component;

class BaseFlagComponent extends Component
{
    public bool $flagged = false;
    public int $flags = 12;
    public bool $showDropdown = false;
    public bool $showFlagReason = false;
    public User $user;

    public function toggleDropdown(): void
    {
        $this->showDropdown = ! $this->showDropdown;
    }

    public function toggleFlagReason(): void
    {
        $this->showFlagReason = ! $this->showFlagReason;
    }

    public function toggleFlag(): void
    {
        if ($this->flagged) {
            $this->decrementFlags();
        } else {
            $this->incrementFlags();
        }

        $this->flagged = ! $this->flagged;
    }

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

    public function flag(): void
    {
        $this->flagged = true;
    }
}
