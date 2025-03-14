<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class TestController extends Controller
{
    public function index(): View
    {
        return view('jocularity.cferror', [
            'title' => trans('Test'),
        ]);
    }
}
