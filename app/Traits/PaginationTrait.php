<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Contracts\Pagination\Paginator;

trait PaginationTrait
{
    public function data(): Paginator
    {
        $query = $this->query();

        $orderBy = $this->orderBy ?? '';
        $direction = $this->sortDirection ?? self::ASCENDING;

        if ($orderBy !== '') {
            $query->orderBy($orderBy, $direction);
        }

        $searchColumn = $this->searchColumn ?? '';
        $searchTerm = $this->searchTerm ?? '';

        if ($searchColumn !== '' && $searchTerm !== '') {
            $query->whereLike($searchColumn, trim($searchTerm));
        }

        $perPage = $this->perPage ?? 20;

        return $query->simplePaginate($perPage);
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
