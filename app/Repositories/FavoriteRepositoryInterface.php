<?php

declare(strict_types=1);

namespace App\Repositories;

interface FavoriteRepositoryInterface extends BaseRepositoryInterface
{
    public function favorited(string $favoritableType, int $favoritableId, int $userId): bool;

    public function deleteFavorite(array $data): mixed;
}
