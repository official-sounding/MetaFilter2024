<?php

declare(strict_types=1);

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

final class PostAvailabilityController extends BaseController
{
    public function create(): View
    {
        return view('jobs.post-availability.create', [
            'title' => trans('Post Your Availability'),
        ]);
    }
}
