<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactTypeRequest;
use App\Http\Requests\UpdateContactTypeRequest;
use App\Models\ContactType;
use Illuminate\Contracts\View\View;

final class ContactTypeController extends Controller
{
    public function index(): View
    {
        //
    }

    public function show(ContactType $contactType): View
    {
        //
    }

    public function create(): View
    {
        //
    }

    public function store(StoreContactTypeRequest $request): void
    {
        //
    }

    public function edit(ContactType $contactType): View
    {
        //
    }

    public function update(UpdateContactTypeRequest $request, ContactType $contactType): void
    {
        //
    }

    public function delete(ContactType $contactType): void
    {
        //
    }
}
