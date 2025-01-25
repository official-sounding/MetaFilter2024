<?php

declare(strict_types=1);

namespace App\Providers;

use App\Enums\RouteNameEnum;
use App\Traits\LoggingTrait;
use App\Traits\SubsiteTrait;
use App\Traits\UrlTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

final class AppServiceProvider extends ServiceProvider
{
    use LoggingTrait;
    use SubsiteTrait;
    use UrlTrait;

    private const string DEFAULT_COLOR_SCHEME = 'light';

    public function boot(): void
    {
        try {
            $sessionLocale = session()->get('locale') ?? null;

            if (!is_null($sessionLocale)) {
                app()->setLocale($sessionLocale);
            }
        } catch (NotFoundExceptionInterface|ContainerExceptionInterface $exception) {
            $this->logError($exception);
        }

        Model::shouldBeStrict();

        $subdomain = $this->getSubdomainFromUrl();
        $subsite = $this->getSubsiteBySubdomain($subdomain);

        session([
            'subdomain' => $subdomain,
            'subsite' => $subsite,
            'subsiteHasTheme' => $subsite->has_theme ?? null,
            'subsiteName' => $subsite->name ?? null,
        ]);

        view()->share([
            'appLocale' => app()->getLocale(),
            'contactMessageRoute' => RouteNameEnum::ContactMessageCreate,
            'forgotPasswordRoute' => RouteNameEnum::AuthForgotPasswordCreate,
            'fundingIndexRoute' => RouteNameEnum::MetaFilterFundingIndex,
            'loginCreateRoute' => RouteNameEnum::AuthLoginCreate,
            'logoutRoute' => RouteNameEnum::AuthLogout,
            'preferencesEditRoute' => RouteNameEnum::PreferencesEdit,
            'profileEditRoute' => RouteNameEnum::ProfileEdit,
            'profileShowRoute' => RouteNameEnum::ProfileShow,
            'signupCreateRoute' => RouteNameEnum::SignupCreate,
            'signupThanksRoute' => RouteNameEnum::SignupWizard,
            'signupWizardRoute' => RouteNameEnum::SignupWizard,
        ]);

        view()->share('defaultColorScheme', self::DEFAULT_COLOR_SCHEME);
        view()->share('subdomain', $subdomain === 'www' ? 'metafilter' : $subdomain);
        view()->share('subsite', $subsite);
        view()->share('subsiteHasTheme', $subsite->has_theme ?? null);
        view()->share('subsiteName', $subsite->name ?? null);
        view()->share('whiteText', $subsite->white_text ?? null);
        view()->share('greenText', $subsite->green_text ?? null);
        view()->share('tagline', $subsite->tagline ?? null);
    }
}
