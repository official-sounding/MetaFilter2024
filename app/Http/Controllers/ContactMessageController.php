<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Contact\StoreContactMessageRequest;
use App\Services\ContactMessageService;
use Illuminate\Contracts\View\View;

final class ContactMessageController extends BaseController
{
    public function __construct(
        protected ContactMessageService $contactMessageService,
    ) {
        parent::__construct();
    }

    public function create(): View
    {
        return view('contact.create');
    }

    public function store(StoreContactMessageRequest $request): void
    {
        $stored = $this->contactMessageService->store($request->validated());
    }
}
