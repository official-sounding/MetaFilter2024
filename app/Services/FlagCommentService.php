<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\FlagRepositoryInterface;
use App\Traits\LoggingTrait;
use Exception;

final class FlagCommentService
{
    use LoggingTrait;

    private const string FLAGGABLE_TYPE = 'App\Models\Comment';

    public function __construct(
        protected FlagRepositoryInterface $flagRepository,
    ) {}

    public function flagged(int $commentId, int $userId): bool
    {
        return $this->flagRepository->userFlagged(
            flaggableType: self::FLAGGABLE_TYPE,
            flaggableId: $commentId,
            userId: $userId,
        );
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

    public function delete(int $commentId, int $userId): bool
    {
        try {
            $this->flagRepository->deleteFlag(
                flaggableType: self::FLAGGABLE_TYPE,
                flagId: $commentId,
                userId: $userId,
            );

            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }
}
