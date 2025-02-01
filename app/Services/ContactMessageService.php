<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ContactMessageRepositoryInterface;
use App\Traits\LoggingTrait;
use Exception;

final class ContactMessageService
{
    use LoggingTrait;

    public function __construct(protected ContactMessageRepositoryInterface $contactMessageRepository) {}

    public function send(array $data): bool
    {
        try {
            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }

    public function store(array $data): bool
    {
        try {
            $this->contactMessageRepository->create($data);

            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }
}
