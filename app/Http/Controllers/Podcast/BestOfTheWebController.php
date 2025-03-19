<?php

declare(strict_types=1);

namespace App\Http\Controllers\Podcast;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

final class BestOfTheWebController extends BaseController
{
    public function index(): View
    {
        return view('podcast.best-of-the-web.index', [
            'title' => trans('Best of the Web'),
            'showSecondaryNavigation' => true,
        ]);
    }
}
