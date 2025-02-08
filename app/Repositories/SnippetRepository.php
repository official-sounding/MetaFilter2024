<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Snippet;

final class SnippetRepository extends BaseRepository implements SnippetRepositoryInterface
{
    public function __construct(Snippet $model)
    {
        parent::__construct($model);
    }
}
