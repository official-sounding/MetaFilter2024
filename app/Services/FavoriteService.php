<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Favorite;
use App\Repositories\FavoriteRepositoryInterface;
use App\Traits\LoggingTrait;

final class FavoriteService
{
    use LoggingTrait;

    public function __construct(
        protected FavoriteRepositoryInterface $favoriteRepository,
    ) {
    }

    public function toggleFavorite(string $favoritableType, int $favoritableId, int $userId): void
    {}

    public function userFavorited(string $favoritableType, int $favoritableId, int $userId): bool
    {
        return $this->favoriteRepository->favorited(
            $favoritableType,
            $favoritableId,
            $userId,
        );
    }
}
