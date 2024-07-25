<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Page;

final class PageRepository extends BaseRepository implements PageRepositoryInterface
{
    public function __construct(Page $model)
    {
        parent::__construct($model);
    }
}
