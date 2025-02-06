<?php

declare(strict_types=1);

namespace App\Livewire\Flags;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class FlagReasonComponent extends Component
{
    public function render(): View
    {
        return view('livewire.flag-reason-component');
    }
}
