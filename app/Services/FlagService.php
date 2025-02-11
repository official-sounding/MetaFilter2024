<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\FlagReasonRepositoryInterface;
use App\Repositories\FlagRepositoryInterface;
use App\Traits\LoggingTrait;
use Exception;

final class FlagService {
    use LoggingTrait;

    public function __construct(
        protected FlagReasonRepositoryInterface $flagReasonRepository,
        protected FlagRepositoryInterface $flagRepository,
    ) {}

    public function getFlagReasons(): array
    {
        return $this->flagReasonRepository->getDropdownValues('text');
    }

    public function userFlagged(string $flaggableType, int $flaggableId, int $userId): bool
    {
        return $this->flagRepository->userFlagged($flaggableType, $flaggableId, $userId);
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

    public function store(array $data): bool
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
        try {
            $this->flagRepository->deleteFlag($flaggableType, $flaggableId, $userId);

            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }
}
