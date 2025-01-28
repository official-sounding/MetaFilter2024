<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\SimplePage;

final class SimplePageRepository extends BaseRepository implements SimplePageRepositoryInterface
{
    public function __construct(SimplePage $model)
    {
        parent::__construct($model);
    }
}
