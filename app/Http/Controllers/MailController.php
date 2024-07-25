<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class MailController extends BaseController
{
    public function index(): View
    {
        return view('mail.index', [
            'title' => 'Mail',
        ]);
    }
}
