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

        session([
            'fundingIndexRoute', RouteNameEnum::MetaFilterFundingIndex->value,
            'loginCreateRoute', RouteNameEnum::AuthLoginCreate->value,
            'loginStoreRoute', RouteNameEnum::AuthLoginStore->value,
            'logoutRoute', RouteNameEnum::AuthLogout->value,
            'preferencesEditRoute' => RouteNameEnum::PreferencesEdit->value,
            'profileEditRoute' => RouteNameEnum::ProfileEdit->value,
            'profileShowRoute' => RouteNameEnum::ProfileShow->value,
            'registerCreateRoute', RouteNameEnum::AuthRegisterCreate->value,
            'registerStoreRoute', RouteNameEnum::AuthRegisterStore->value,
            'subdomain' => $subdomain,
            'subsite' => $subsite,
            'subsiteName' => $subsite['name'],
        ]);

        view()->share('stylesheets', $this->getStylesheets($subsite));
        view()->share('subdomain', $subdomain === 'www' ? 'metafilter' : $subdomain);
        view()->share('subsite', $subsite);
        view()->share('subsiteName', $subsite['name']);

        view()->share('contactFormRoute', RouteNameEnum::ContactMessageCreate->value);
        view()->share('forgotPasswordRoute', RouteNameEnum::AuthForgotPasswordCreate->value);
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
