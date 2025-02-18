<?php

declare(strict_types=1);

namespace App\Services;

use App\Dtos\FavoriteDto;
use App\Models\Favorite;
use App\Repositories\FavoriteRepositoryInterface;
use App\Traits\LoggingTrait;
use Exception;

final class FavoriteService
{
    use LoggingTrait;

    public function __construct(
        protected FavoriteRepositoryInterface $favoriteRepository,
    ) {}

    public function store(FavoriteDto $favoriteDto): bool
    {
        try {
            $data = [
                'favoritable_type' => $favoriteDto->favoritableType,
                'favoritable_id' => $favoriteDto->favoritableId,
                'user_id' => $favoriteDto->userId,
            ];

            $this->favoriteRepository->create($data);

            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }

    public function delete(string $favoritableType, int $favoritableId, int $userId): bool
    {
        try {
            (new Favorite())->where([
                'favoritable_type' => $favoritableType,
                'favoritable_id' => $favoritableId,
                'user_id' => $userId,
            ])->delete();

            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }

    public function userFavorited(string $favoritableType, int $favoritableId, int $userId): bool
    {
        return $this->favoriteRepository->favorited(
            $favoritableType,
            $favoritableId,
            $userId,
        );
    }
}
