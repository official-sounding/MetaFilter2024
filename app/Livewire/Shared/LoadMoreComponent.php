<?php

declare(strict_types=1);

namespace App\Livewire\Shared;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class LoadMoreComponent extends Component
{
    public function render(): View
    {
        return view('livewire.shared.load-more-component');
    }
}
