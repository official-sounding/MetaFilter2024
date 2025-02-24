<?php

declare(strict_types=1);

namespace App\Livewire\Tables;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class TableHeaderComponent extends Component
{
    public array $columns = [];
    public string $orderBy = '';
    public string $sortDirection = 'asc';

    public function mount(array $columns, string $orderBy): void
    {
        $this->columns = $columns;
        $this->orderBy = $orderBy;
    }

    public function render(): View
    {
        return view('livewire.tables.table-header-component', [
            'columns' => $this->columns,
            'orderBy' => $this->orderBy,
        ]);
    }
}
