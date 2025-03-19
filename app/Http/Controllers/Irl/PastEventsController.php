<?php

declare(strict_types=1);

namespace App\Http\Controllers\Irl;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

final class PastEventsController extends BaseController
{
    public function index(): View
    {
        return view('irl.past-events.index', [
            'title' => trans('Past Events'),
            'showSecondaryNavigation' => true,
        ]);
    }
}
