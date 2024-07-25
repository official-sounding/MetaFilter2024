<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class MyMeFiController extends BaseController
{
    public function index(): View
    {
        return view('my-mefi.index', [
            'title' => 'My MeFi',
        ]);
    }
}
