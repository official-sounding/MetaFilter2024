<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Contracts\View\View;

final class PageController extends BaseController
{
    public function show(Page $page): View
    {
        return view('pages.show', [
            'page' => compact($page),
        ]);
    }
}
