<?php

declare(strict_types=1);

namespace App\Livewire\Moderators;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class ToggleActivityComponent extends Component
{
    public function render(): View
    {
        return view('livewire.moderators.toggle-activity-component');
    }
}
