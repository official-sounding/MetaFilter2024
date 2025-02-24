<?php

/** @noinspection PhpPossiblePolymorphicInvocationInspection */

declare(strict_types=1);

namespace App\Livewire\Tables;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

abstract class TableComponent extends Component
{
    use WithPagination;

    protected const string ASCENDING = 'asc';
    protected const string DESCENDING = 'desc';

    public int $page = 1;
    public int $perPage = 20;
    public string $orderBy = 'id';
    public string $sortDirection = self::ASCENDING;

    public string $searchColumn = '';

    abstract public function columns(): array;

    public function render(): View
    {
        return view('livewire.tables.table-component');
    }

    public function data()
    {
        return $this
            ->query()
            ->when($this->orderBy !== '', function ($query) {
                $query->orderBy($this->orderBy, $this->sortDirection);
            })
            /*
            ->when($this->searchColumn !== '', function ($query) {
                $query->whereLike($this->searchColumn, trim($this->searchColumns['title']));
            })
            */
            ->simplePaginate($this->perPage);
    }

    public function sort(string $key): void
    {
        $this->resetPage();

        if ($this->orderBy === $key) {
            $this->sortDirection = $this->sortDirection === self::ASCENDING ? self::DESCENDING : self::ASCENDING;

            return;
        }

        $this->orderBy = $key;
        $this->sortDirection = self::ASCENDING;
    }
}
