<?php

declare(strict_types=1);

namespace App\Livewire\Tables;

use Illuminate\Contracts\Pagination\CursorPaginator;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class TableBodyComponent extends Component
{
    use WithPagination;

    public CursorPaginator $records;

    public function mount(CursorPaginator $records): void
    {
        $this->records = $records;
    }

    public function render(): View
    {
        return view('livewire.tables.table-body-component', [
            'records' => $this->records,
        ]);
    }
}
