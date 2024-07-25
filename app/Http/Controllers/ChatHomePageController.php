<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class ChatHomePageController extends BaseController
{
    public function index(): View
    {
        return view('chat.index', [
            'title' => 'Chat',
        ]);
    }
}
