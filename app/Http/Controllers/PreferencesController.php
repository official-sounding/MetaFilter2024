<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\User\StorePreferencesRequest;
use Illuminate\Contracts\View\View;

final class PreferencesController extends BaseController
{
    public function edit(): View
    {
        return view('preferences.edit', [
            'title' => trans('Preferences'),
        ]);
    }

    public function store(StorePreferencesRequest $request): void
    {
        //
    }
}
