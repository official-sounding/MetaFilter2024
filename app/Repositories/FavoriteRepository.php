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

    public function favorited(string $favoritableType, int $favoritableId, int $userId): bool
    {
        return $this->model->newQuery()
            ->where('favoritable_type', '=', $favoritableType)
            ->where('favoritable_id', '=', $favoritableId)
            ->where('user_id', '=', $userId)
            ->exists();
    }

    public function deleteFavorite(array $data): mixed
    {
        return $this->model->newQuery()
            ->where('favoritable_type', '=', $data['favoritable_type'])
            ->where('favoritable_id', '=', $data['favoritable_id'])
            ->where('user_id', '=', $data['user_id'])
            ->delete();
    }
}
