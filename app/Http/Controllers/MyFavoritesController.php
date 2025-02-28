<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class MyFavoritesController extends BaseController
{
    public function index(): View
    {
        return view('my-favorites.index', [
            'title' => trans('My Favorites'),
            'showSecondaryNavigation' => true,
        ]);
    }
}
