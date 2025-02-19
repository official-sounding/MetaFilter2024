<?php

declare(strict_types=1);

namespace App\Livewire\Tables;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Livewire\Component;

abstract class TableComponent extends Component
{
    public array $columns = [];
    public array $headers = [];
    public LengthAwarePaginator $records;

    public function mount(LengthAwarePaginator $records, array $headers): void
    {
        $this->records = $records;
        $this->headers = $headers;
    }

    public function render(): View
    {
        return view('livewire.tables.table-component', [
            'headers' => $this->headers,
            'records' => $this->records,
        ]);
    }
}
