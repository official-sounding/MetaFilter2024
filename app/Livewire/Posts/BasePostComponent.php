<?php

declare(strict_types=1);

namespace App\Livewire\Posts;

use App\Models\User;
use Livewire\Component;

class BasePostComponent extends Component
{
    public bool $showDropdown = false;
    public User $user;

    public function toggleDropdown(): void
    {
        $this->showDropdown = ! $this->showDropdown;
    }
}
