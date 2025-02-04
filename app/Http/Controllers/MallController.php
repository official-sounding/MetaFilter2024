<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class MallController extends BaseController
{
    public function index(): View
    {
        return view('mall.index', [
            'title' => trans('Mall'),
        ]);
    }
}
