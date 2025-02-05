<?php

declare(strict_types=1);

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

final class PostJobController extends BaseController
{
    public function create(): View
    {
        return view('jobs.post-job.create', [
            'title' => trans('Post a Job'),
        ]);
    }
}
