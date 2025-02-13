<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;

final class ContactsController extends BaseController
{
    public function index(): View
    {
        return view('contacts.index', [
            'title' => trans('Contacts'),
        ]);
    }

    public function show(User $contact): View
    {
        return view('contacts.show', [
            'title' => $contact->username,
            'contact' => $contact,
        ]);
    }
}
