<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class MyCommentsController extends BaseController
{
    public function index(): View
    {
        return view('my-comments.index', [
            'title' => trans('My Comments'),
        ]);
    }
}
