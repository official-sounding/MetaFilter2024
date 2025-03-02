<?php

declare(strict_types=1);

namespace App\Repositories;

use Spatie\Tags\Tag;

final class TagRepository extends BaseRepository implements TagRepositoryInterface
{
    public function __construct(Tag $model)
    {
        parent::__construct($model);
    }
}
