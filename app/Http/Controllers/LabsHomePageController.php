<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class LabsHomePageController extends BaseController
{
    public function index(): View
    {
        return view('labs.index', [
            'title' => 'Labs',
        ]);
    }
}
