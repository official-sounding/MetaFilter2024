<?php

declare(strict_types=1);

namespace App\Http\Controllers\Podcast;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

final class OutOfTheBlueController extends BaseController
{
    public function index(): View
    {
        return view('podcast.out-of-the-blue.index', [
            'title' => trans('Out of the Blue'),
        ]);
    }
}
