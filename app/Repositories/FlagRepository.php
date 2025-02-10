<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Flag;

final class FlagRepository extends BaseRepository implements FlagRepositoryInterface
{
    public function __construct(Flag $model)
    {
        parent::__construct($model);
    }

    public function flagged(string $flaggableType, int $flaggableId, int $userId): bool
    {
        return $this->model->newQuery()
            ->where('flaggable_type', '=', $flaggableType)
            ->where('flaggable_id', '=', $flaggableId)
            ->where('user_id', '=', $userId)
            ->exists();
    }

    public function removeFlag(int $flagId, int $userId): bool
    {
        return $this->model->newQuery()
            ->where('id', '=', $flagId)
            ->where('user_id', '=', $userId)
            ->delete();
    }
}
