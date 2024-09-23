<?php

declare(strict_types=1);

namespace App\Repositories;

interface FavoriteRepositoryInterface extends BaseRepositoryInterface
{
    public function favorited(string $favoriteableType, int $favoriteableId, int $userId): bool;

    public function deleteFavorite(array $data): mixed;
}
