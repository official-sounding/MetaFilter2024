<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Traits\MyMeFiTrait;
use Illuminate\Contracts\View\View;

final class MyMeFiController extends BaseController
{
    use MyMeFiTrait;

    public function index(): View
    {
        return view('my-mefi.index', [
            'title' => $this->getTitle(),
            'showTitle' => true,
        ]);
    }
}
