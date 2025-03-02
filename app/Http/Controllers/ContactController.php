<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Contracts\View\View;

final class ContactController extends Controller
{
    public function index(): View
    {
        $viewPath = 'contacts.index';

        return view($viewPath);
    }

    public function show(Contact $contact): View
    {
        $viewPath = 'contacts.show';

        return view($viewPath, compact('contact'));
    }

    public function create(): View
    {

        $viewPath = 'contacts.create';

        return view($viewPath);
    }

    public function store(StoreContactRequest $request): void
    {
        //
    }

    public function edit(Contact $contact): View
    {
        $viewPath = 'contacts.edit';

        return view($viewPath, compact('contact'));
    }

    public function update(UpdateContactRequest $request, Contact $contact): void
    {
        //
    }

    public function delete(Contact $contact): void
    {
        //
    }
}
