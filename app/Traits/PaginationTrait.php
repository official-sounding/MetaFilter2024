<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Contracts\Pagination\Paginator;

trait PaginationTrait
{
    public function data(): Paginator
    {
        return $this
            ->query()
            ->when($this->orderBy !== '', function ($query) {
                $query->orderBy(column: $this->orderBy, direction: $this->sortDirection);
            })
            ->when(isset($this->searchColumn) && $this->searchColumn !== '', function ($query) {
                $query->whereLike(column: $this->searchColumn, value: trim($this->searchTerm));
            })
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
