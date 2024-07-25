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
        $this->subdomain = $this->getSubdomainFromUrl();
        $this->subsite = $this->getSubsiteFromUrl();
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

    public function getBySlug(string $slug): Builder
    {
        return $this->getQuery()->where('slug', '=', $slug)->firstOrFail();
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
        $app = $this->getQuery()->find($id);

        $app->update($data);

        return $app;
    }

    public function with($relation): Builder
    {
        return $this->getQuery()->with($relation);
    }
}
