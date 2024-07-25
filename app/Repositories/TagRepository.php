<?php

declare(strict_types=1);

namespace App\Repositories;

use Spatie\Tags\Tag;

final class TagRepository implements TagRepositoryInterface
{
    public function __construct(Tag $model) {}

}
