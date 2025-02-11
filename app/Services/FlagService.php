<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\FlagRepositoryInterface;
use App\Traits\LoggingTrait;
use Exception;

final class FlagService
{
    use LoggingTrait;

    public function __construct(
        protected FlagRepositoryInterface $flagRepository,
    ) {
    }

    public function flagged(string $flaggableType, int $flaggableId, int $userId): bool
    {
        return $this->flagRepository->flagged($flaggableType, $flaggableId, $userId);
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

    public function delete(string $flaggableType, int $flaggableId, int $userId): bool
    {
        $data = [
            'flaggable_type' => $flaggableType,
            'flaggable_id' => $flaggableId,
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
