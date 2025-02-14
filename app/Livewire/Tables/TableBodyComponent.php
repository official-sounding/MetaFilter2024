<?php

declare(strict_types=1);

namespace App\Livewire\Tables;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class TableBodyComponent extends Component
{
    use WithPagination;

    public LengthAwarePaginator $records;

    public function mount(LengthAwarePaginator $records): void
    {
        $this->records = $records;
    }

    public function render(): View
    {
        return view('livewire.tables.table-filter-component', [
            'records' => $this->records,
        ]);
    }
}
