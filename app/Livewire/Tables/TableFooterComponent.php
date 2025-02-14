<?php

declare(strict_types=1);

namespace App\Livewire\Tables;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class TableFooterComponent extends Component
{
    public function render(): View
    {
        return view('livewire.tables.table-footer-component');
    }
}
