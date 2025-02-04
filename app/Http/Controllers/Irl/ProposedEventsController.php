<?php

declare(strict_types=1);

namespace App\Http\Controllers\Irl;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

final class ProposedEventsController extends BaseController
{
    public function index(): View
    {
        return view('irl.proposed-events.index', [
            'title' => trans('Proposed Events'),
        ]);
    }
}
