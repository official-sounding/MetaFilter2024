<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class ContactsController extends BaseController
{
    public function create(): View
    {
        return view('contacts.index', [
            'title' => 'Contacts',
        ]);
    }
}
