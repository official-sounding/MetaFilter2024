<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\FlagRepositoryInterface;
use App\Traits\LoggingTrait;
use Exception;

final class FlagPostService
{
    use LoggingTrait;

    private const string FLAGGABLE_TYPE = 'App\Models\Post';

    public function __construct(
        protected FlagRepositoryInterface $flagRepository,
    ) {}

    public function flagged(int $postId, int $userId): bool
    {
        return $this->flagRepository->flagged(self::FLAGGABLE_TYPE, $postId, $userId);
    }

    public function create(array $data): bool
    {
        try {
            $this->flagRepository->create($data);

            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }

    public function delete(int $postId, int $userId): bool
    {
        $data = [
            'flaggable_type' => self::FLAGGABLE_TYPE,
            'flaggable_id' => $postId,
            'user_id' => $userId,
        ];

        try {
            $this->flagRepository->deleteFlag($data);

            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }
}
