<?php

declare(strict_types=1);

namespace App\Livewire\Tables;

use App\Traits\PaginationTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

abstract class TableComponent extends Component
{
    use PaginationTrait;
    use WithPagination;

    protected const string ASCENDING = 'asc';
    protected const string DESCENDING = 'desc';

    public int $page = 1;
    public int $perPage = 20;
    public string $orderBy = 'id';
    public string $sortDirection = self::ASCENDING;

    public string $searchColumn = '';
    public string $searchTerm = '';

    abstract public function columns(): array;

    abstract public function query(): Builder|null;

    public function render(): View
    {
        return view('livewire.tables.table-component');
    }
}
