<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class RecentActivityController extends BaseController
{
    public function show(): View
    {
        return view('recent-activity.show', [
            'title' => trans('Recent Activity'),
        ]);
    }
}
