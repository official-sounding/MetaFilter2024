<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\MeFiMail;

final class MeFiMailRepository extends BaseRepository implements MeFiMailRepositoryInterface
{
    public function __construct(MeFiMail $model)
    {
        parent::__construct($model);
    }
}
