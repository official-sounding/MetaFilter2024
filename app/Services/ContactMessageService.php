<?php

declare(strict_types=1);

namespace App\Services;

use App\Http\Requests\Contact\StoreContactMessageRequest;
use App\Models\ContactMessage;
use App\Traits\LoggingTrait;
use Exception;

final class ContactMessageService
{
    use LoggingTrait;

    public function store(StoreContactMessageRequest $request): bool
    {
        try {
            ContactMessage::create($request->validated());


            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }
}
