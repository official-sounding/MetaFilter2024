<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Snippet;
use Illuminate\Database\Eloquent\Model;

final class SnippetRepository extends BaseRepository implements SnippetRepositoryInterface
{
    public function __construct(Snippet $model)
    {
        parent::__construct($model);
    }

    public function getBySlug(string $slug): string {
        return $this->model->where('slug', '=', $slug)->value('body');
    }

}
