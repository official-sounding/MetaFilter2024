<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\FlagReason;

final class FlagReasonRepository extends BaseRepository implements FlagReasonRepositoryInterface
{
    public function __construct(FlagReason $model)
    {
        parent::__construct($model);
    }
}
