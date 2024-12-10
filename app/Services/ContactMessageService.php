<?php

declare(strict_types=1);

namespace App\Services;

use App\Http\Requests\Contact\SendContactMessageRequest;
use App\Models\ContactMessage;
use App\Traits\LoggingTrait;

final class ContactMessageService
{
    use LoggingTrait;

    public function store(SendContactMessageRequest $request): ContactMessage
    {
        return ContactMessage::create($request->validated());
    }
}
