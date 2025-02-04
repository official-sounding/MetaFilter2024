<?php

declare(strict_types=1);

namespace App\Http\Controllers\FanFare;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

final class WaterCoolerController extends BaseController
{
    public function index(): View
    {
        return view('fanfare.water-cooler.index', [
            'title' => trans('Water Cooler'),
        ]);
    }
}
