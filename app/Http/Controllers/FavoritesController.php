<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class FavoritesController extends BaseController
{
    public function index(): View
    {
        return view('favorites.index', [
            'title' => trans('Favorites'),
        ]);
    }
}
