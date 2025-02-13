<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\ContactRepositoryInterface;
use Illuminate\Contracts\View\View;

final class ContactsController extends BaseController
{
    public function __construct(protected ContactRepositoryInterface $contactRepository)
    {
        parent::__construct();
    }

    public function index(): View
    {
        $contacts = $this->contactRepository->all();

        return view('contacts.index', [
            'title' => trans('Contacts', [
                'contacts' => $contacts
            ]),
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
