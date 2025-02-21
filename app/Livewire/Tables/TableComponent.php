<?php

declare(strict_types=1);

namespace App\Livewire\Tables;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

abstract class TableComponent extends Component
{
    use WithPagination;

    public int $page = 1;
    public int $perPage = 10;

    abstract public function query(): Builder;

    abstract public function columns(): array;

    public function data(): LengthAwarePaginator
    {
        return $this
            ->query()
            ->paginate($this->perPage);
    }
}
