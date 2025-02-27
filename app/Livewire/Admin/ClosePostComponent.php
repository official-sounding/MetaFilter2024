<?php

declare(strict_types=1);

namespace App\Livewire\Admin;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class ClosePostComponent extends Component
{
    public function render(): View
    {
        return view('livewire.close-post-component');
    }
}
