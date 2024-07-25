<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class PreferencesController extends BaseController
{
    public function edit(): View
    {
        return view('preferences.edit', [
            'title' => 'Preferences',
        ]);
    }
}
