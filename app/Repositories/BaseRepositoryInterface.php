<?php

declare(strict_types=1);

namespace App\Repositories;

interface BaseRepositoryInterface
{
    public function all();

    public function count();

    public function create(array $data);

    public function delete(int $id);

    public function find(int $id);

    public function getById(int $id);

    public function getBySlug(string $slug);

    public function first();

    public function firstOrCreate(array $attributes = [], array $values = []);

    public function paginate($limit = 20);

    public function update(int $id, array $data);

    public function where($column, $id, $first = false);

    public function with($relation);
}
