<?php

declare(strict_types=1);

namespace App\Http\Controllers\FanFare;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

final class ClubsController extends BaseController
{
    public function index(): View
    {
        return view('fanfare.clubs.index', [
            'title' => trans('Clubs'),
        ]);
    }
}
