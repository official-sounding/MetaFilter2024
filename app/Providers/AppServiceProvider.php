<?php

declare(strict_types=1);

namespace App\Providers;

use App\Enums\RouteNameEnum;
use App\Traits\SubsiteTrait;
use App\Traits\UrlTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    use SubsiteTrait;
    use UrlTrait;

    public function boot(): void
    {
        Model::shouldBeStrict();

        $subdomain = $this->getSubdomainFromUrl();

        $subsite = $this->getSubsiteBySubdomain($subdomain);

        view()->share('stylesheets', $this->getStylesheets($subsite));
        view()->share('subdomain', $subdomain === 'www' ? 'metafilter' : $subdomain);
        view()->share('subsite', $subsite);

        view()->share('currentRouteName', Route::currentRouteName());
        view()->share('fundingIndexRoute', RouteNameEnum::METAFILTER_FUNDING_INDEX->value);
        view()->share('loginCreateRoute', RouteNameEnum::AUTH_LOGIN_CREATE->value);
        view()->share('loginStoreRoute', RouteNameEnum::AUTH_LOGIN_STORE->value);
        view()->share('logoutRoute', RouteNameEnum::AUTH_LOGOUT->value);
        view()->share('registerCreateRoute', RouteNameEnum::AUTH_REGISTER_CREATE->value);
        view()->share('registerStoreRoute', RouteNameEnum::AUTH_REGISTER_STORE->value);
    }

    private function getStylesheets(array $subsite): array
    {
        $stylesheets = [
            'resources/sass/app.scss',
        ];

        if ($subsite['hasTheme'] === true) {
            $subsiteStylesheet = $this->getStylesheetName($subsite);

            $stylesheets[] = "resources/sass/themes/$subsiteStylesheet.scss";
        } else {
            $stylesheets[] = 'resources/sass/themes/metafilter.scss';
        }

        return $stylesheets;
    }
}
