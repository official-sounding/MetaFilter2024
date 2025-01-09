<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreLanguageRequest;

final class LanguageController extends BaseController
{
    public function store(StoreLanguageRequest $request)
    {
        $language = $request->input('language');

        session(['language' => $language]);

        return redirect()->back();
    }
}
