<?php

declare(strict_types=1);

namespace App\Providers;

use App\View\Composers\Navigation\FooterLinksNavigationViewComposer;
use App\View\Composers\Navigation\FooterMemberLinksViewComposer;
use App\View\Composers\Navigation\FooterSubsiteNavigationViewComposer;
use App\View\Composers\Navigation\GlobalNavigationViewComposer;
use App\View\Composers\Navigation\PrimaryNavigationViewComposer;
use App\View\Composers\Navigation\SecondaryNavigationViewComposer;
use App\View\Composers\Navigation\UtilityNavigationViewComposer;
use Illuminate\Support\ServiceProvider;

final class ViewComposerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        view()->composer(
            'layouts.navigation.footer-links-navigation',
            FooterLinksNavigationViewComposer::class,
        );

        view()->composer(
            'layouts.navigation.footer-member-links-navigation',
            FooterMemberLinksViewComposer::class,
        );

        view()->composer(
            'layouts.navigation.footer-subsite-navigation',
            FooterSubsiteNavigationViewComposer::class,
        );

        view()->composer(
            'layouts.navigation.global-navigation',
            GlobalNavigationViewComposer::class,
        );

        view()->composer(
            'layouts.navigation.primary-navigation',
            PrimaryNavigationViewComposer::class,
        );

        view()->composer(
            'layouts.navigation.secondary-navigation',
            SecondaryNavigationViewComposer::class,
        );

        view()->composer(
            'layouts.navigation.utility-navigation',
            UtilityNavigationViewComposer::class,
        );
    }
}
