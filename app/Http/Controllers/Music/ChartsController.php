<?php

declare(strict_types=1);

namespace App\Http\Controllers\Music;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

final class ChartsController extends BaseController
{
    public function index(): View
    {
        return view('music.charts.index', [
            'title' => trans('Charts'),
            'showSecondaryNavigation' => true,
        ]);
    }
}
