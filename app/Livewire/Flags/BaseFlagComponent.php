<?php

declare(strict_types=1);

namespace App\Livewire\Flags;

use App\Models\User;
use App\Traits\LoggingTrait;
use Livewire\Component;

class BaseFlagComponent extends Component
{
    use LoggingTrait;

    public string $flagEvent;
    public bool $flagged;
    public int $flags;
    public string $iconPath;
    public string $type;
    public ?User $user;
}
