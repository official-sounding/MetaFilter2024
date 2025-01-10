<?php

declare(strict_types=1);

namespace App\View\Composers\Language;

use App\Enums\RouteNameEnum;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

final class SwitchLanguageViewComposer implements ViewComposerInterface
{
    public function compose(View $view): void
    {
        $switchLanguageRoute = Cache::rememberForever('switch-language-route', function () {
            return RouteNameEnum::LanguageSwitcher;
        });

        $view->with([
            'switchLanguageRoute' => $switchLanguageRoute,
            'languages' => config('app.available_locales'),
        ]);
    }
}
