<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class RecentCommentsController extends BaseController
{
    public function index(): View
    {
        return view('recent-comments.index', [
            'title' => trans('Recent Comments'),
        ]);
    }
}
