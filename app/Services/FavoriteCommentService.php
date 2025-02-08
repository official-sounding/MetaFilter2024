<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\FavoriteRepositoryInterface;
use App\Traits\LoggingTrait;
use Exception;

final class FavoriteCommentService
{
    use LoggingTrait;

    private const string FAVORITABLE_TYPE = 'App\Models\Comment';
    public function __construct(
        protected FavoriteRepositoryInterface $favoriteRepository,
    ) {}

    public function favorited(int $commentId, ?int $userId): bool
    {
        if ($userId === null) {
            return false;
        }

        return $this->favoriteRepository->favorited(self::FAVORITABLE_TYPE, $commentId, $userId);
    }

    public function create(int $commentId, int $userId): bool
    {
        $data = [
            'favoritable_type' => self::FAVORITABLE_TYPE,
            'favoritable_id' => $commentId,
            'user_id' => $userId,
        ];

        try {
            $this->favoriteRepository->create($data);

            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }

    public function delete(int $commentId, int $userId): bool
    {
        $data = [
            'favoritable_type' => self::FAVORITABLE_TYPE,
            'favoritable_id' => $commentId,
            'user_id' => $userId,
        ];

        try {
            $this->favoriteRepository->deleteFavorite($data);

            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }
}
