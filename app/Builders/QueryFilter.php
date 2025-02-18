<?php

declare(strict_types=1);

namespace App\Builders;

use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
// https://dev.to/rafaelogic/building-a-reusable-laravel-model-filter-for-dynamic-querying-409e
abstract class QueryFilter
{
    protected Request $request;
    protected Builder $builder;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply(Builder $builder): Builder
    {
        $this->builder = $builder;

        foreach ($this->filters() as $filter => $value) {
            if (method_exists($this, $filter)) {
                $this->$filter($value);
            }
        }

        return $this->builder;
    }

    public function filters(): array
    {
        return $this->request->all();
    }

    public function deleted(): Builder
    {
        return $this->builder->whereNotNull('deleted_at');
    }
}
