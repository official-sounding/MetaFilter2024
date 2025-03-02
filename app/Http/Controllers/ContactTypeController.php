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
        $viewPath = 'contact-types.index';

        return view($viewPath);
    }

    public function show(ContactType $contactType): View
    {
        $viewPath = 'contact-types.show';

        return view($viewPath, compact('contactType'));
    }

    public function create(): View
    {
        $viewPath = 'contact-types.create';

        return view($viewPath);
    }

    public function store(StoreContactTypeRequest $request): void
    {
        //
    }

    public function edit(ContactType $contactType): View
    {
        $viewPath = 'contact-types.edit';

        return view($viewPath, compact('contactType'));
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
