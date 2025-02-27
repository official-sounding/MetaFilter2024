<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\BaseModel;
use App\Traits\CacheTimeTrait;
use App\Traits\SubsiteTrait;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BaseRepository implements BaseRepositoryInterface
{
    use CacheTimeTrait;
    use SubsiteTrait;

    protected Model|BaseModel $model;
    protected string $singularEntity;
    protected string $subdomain;
    protected array $subsite;

    public function __construct(Model|BaseModel $model)
    {
        $this->model = $model;
        $this->singularEntity = Str::singular($model->getTable());
        $this->subdomain = $this->getSubdomain();
    }

    public function baseQuery(): Builder
    {
        return $this->model->query();
    }

    public function all(): Collection|array
    {
        return $this->baseQuery()->get();
    }

    public function count(): int
    {
        return $this->baseQuery()->count();
    }

    public function create(array $data): Model
    {
        return $this->baseQuery()->create($data);
    }

    public function delete(int $id): ?bool
    {
        return $this->baseQuery()->find($id)->delete();
    }

    public function find(int $id): Model
    {
        return $this->baseQuery()->find($id);
    }

    public function getById(int $id): Builder
    {
        return $this->baseQuery()->where('id', '=', $id);
    }

    public function getBySlug(string $slug): Model|null
    {
        return $this->baseQuery()->where('slug', '=', $slug)->sole();
    }

    public function getDropdownValues(string $column, string $key = 'id', bool $cache = true): array
    {
        $cacheKey = $column . '-dropdown-values';

        if ($cache === true) {
            cache()->remember(key: $cacheKey, ttl: $this->oneHour(), callback: function () use ($column, $key) {
                return $this->baseQuery()->pluck($column, $key)->toArray();
            });
        }

        return $this->baseQuery()->pluck($column, $key)->toArray();
    }

    public function first(): Model
    {
        return $this->baseQuery()->first();
    }

    public function firstOrCreate(array $attributes = [], array $values = []): Builder|Model
    {
        return $this->baseQuery()->firstOrCreate($attributes, $values);
    }

    public function paginate($limit = 20): LengthAwarePaginator
    {
        return $this->baseQuery()->paginate($limit);
    }

    public function where($column, $id, $first = false): Model|Collection|Builder|array|null
    {
        $query = $this->baseQuery()->where($column, '=', $id);

        return ($first) ? $query->first() : $query->get();
    }

    public function update($id, array $data): Model|Collection|Builder|array|null
    {
        $model = $this->baseQuery()->find($id);

        $model->update($data);

        return $model;
    }

    public function updateOrCreate(array $data): Model|Collection|Builder|array|null {}

    public function with($relation): Builder
    {
        return $this->baseQuery()->with($relation);
    }
}
