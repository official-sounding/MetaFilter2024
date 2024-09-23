<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Favorite;

final class FavoriteRepository extends BaseRepository implements FavoriteRepositoryInterface
{
    public function __construct(Favorite $model)
    {
        parent::__construct($model);
    }

    public function favorited(string $favoriteableType, int $favoriteableId, int $userId): bool
    {
        return $this->model->newQuery()
            ->where('favoriteable_type', '=', $favoriteableType)
            ->where('favoriteable_id', '=', $favoriteableId)
            ->where('user_id', '=', $userId)
            ->exists();
    }

    public function deleteFavorite(array $data): mixed
    {
        return $this->model->newQuery()
            ->where('favoriteable_type', '=', $data['favoriteable_type'])
            ->where('favoriteable_id', '=', $data['favoriteable_id'])
            ->where('user_id', '=', $data['user_id'])
            ->delete();
    }
}
