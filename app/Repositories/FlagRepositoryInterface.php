<?php

declare(strict_types=1);

namespace App\Repositories;

interface FlagRepositoryInterface extends BaseRepositoryInterface
{
    public function userFlagged(string $flaggableType, int $flaggableId, int $userId): bool;

    public function deleteFlag(string $flaggableType, int $flagId, int $userId): bool;
}
