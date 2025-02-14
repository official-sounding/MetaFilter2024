<?php

declare(strict_types=1);

namespace App\Livewire\Tables;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class TableHeaderComponent extends Component
{
    public array $headers = [];

    public function mount(array $headers): void
    {
        $this->headers = $headers;
    }

    public function render(): View
    {
        return view('livewire.tables.table-header-component', [
            'headers' => $this->headers,
        ]);
    }
}
