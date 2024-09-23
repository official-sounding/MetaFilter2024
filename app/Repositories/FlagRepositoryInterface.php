<?php

declare(strict_types=1);

namespace App\Repositories;

interface FlagRepositoryInterface extends BaseRepositoryInterface
{
    public function flagged(string $flaggableType, int $flaggableId, int $userId): bool;

    public function deleteFlag(array $data): mixed;
}
