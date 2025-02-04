<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class SearchController extends BaseController
{
    public function create(): View
    {
        return view('search.create', [
            'title' => trans('Search'),
        ]);
    }

    public function show(): View
    {
        return view('search.show', [
            'title' => trans('Search Results'),
        ]);
    }
}
