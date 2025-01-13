<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Localization\StoreLanguageRequest;
use App\Traits\LoggingTrait;

final class LanguageController extends BaseController
{
    use LoggingTrait;

    public function store(StoreLanguageRequest $request)
    {
        $availableLocales = config('app.available_locales');

        $language = $request->input('language');

        if (in_array($language, $availableLocales)) {
            session(['language' => $language]);
        } else {
            $this->logError('Invalid language selected: ' . $language);
        }

        return redirect()->back();
    }
}
