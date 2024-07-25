<?php

declare(strict_types=1);

namespace App\Services;

use App\Http\Requests\Contact\StoreContactMessageRequest;
use App\Repositories\ContactMessageRepositoryInterface;

final class ContactMessageService
{
    public function __construct(protected ContactMessageRepositoryInterface $contactMessageRepository) {}

    public function store(StoreContactMessageRequest $request): bool
    {
        // TODO: Implement store() method.
        return true;
    }
}
