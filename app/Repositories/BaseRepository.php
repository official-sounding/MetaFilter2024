<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\BaseModel;
use App\Traits\SubsiteTrait;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BaseRepository implements BaseRepositoryInterface
{
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

    public function getQuery(): Builder
    {
        return $this->model->query();
    }

    public function all(): Collection|array
    {
        return $this->getQuery()->get();
    }

    public function count(): int
    {
        return $this->getQuery()->count();
    }

    public function create(array $data): Model
    {
        return $this->getQuery()->create($data);
    }

    public function delete(int $id): ?bool
    {
        return $this->getQuery()->find($id)->delete();
    }

    public function find(int $id): Model
    {
        return $this->getQuery()->find($id);
    }

    public function getById(int $id): Builder
    {
        return $this->getQuery()->where('id', '=', $id);
    }

    public function getBySlug(string $slug): string|Model
    {
        return $this->getQuery()->where('slug', '=', $slug)->firstOrFail();
    }

    public function getDropdownValues(string $column, string $key = 'id'): array
    {
        return $this->getQuery()->pluck($column, $key)->toArray();
    }

    public function first(): Model
    {
        return $this->getQuery()->first();
    }

    public function firstOrCreate(array $attributes = [], array $values = []): Builder|Model
    {
        return $this->getQuery()->firstOrCreate($attributes, $values);
    }

    public function paginate($limit = 20): LengthAwarePaginator
    {
        return $this->getQuery()->paginate($limit);
    }

    public function where($column, $id, $first = false): Model|Collection|Builder|array|null
    {
        $query = $this->getQuery()->where($column, '=', $id);

        return ($first) ? $query->first() : $query->get();
    }

    public function update($id, array $data): Model|Collection|Builder|array|null
    {
        $model = $this->getQuery()->find($id);

        $model->update($data);

        return $model;
    }

    public function updateOrCreate(array $data): Model|Collection|Builder|array|null {}

    public function with($relation): Builder
    {
        return $this->getQuery()->with($relation);
    }

    public function getPopularPosts()
    {
        // TODO: Implement getPopularPosts() method.
    }
}
