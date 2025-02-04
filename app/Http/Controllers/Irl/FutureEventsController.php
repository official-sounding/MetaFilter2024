<?php

declare(strict_types=1);

namespace App\Http\Controllers\Irl;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

final class FutureEventsController extends BaseController
{
    public function index(): View
    {
        return view('irl.future-events.index', [
            'title' => trans('Future Events'),
        ]);
    }
}
