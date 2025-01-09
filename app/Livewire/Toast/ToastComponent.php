<?php

declare(strict_types=1);

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class ToastComponent extends Component
{
    public function render(): View
    {
        return view('livewire.toast-component');
    }
}
