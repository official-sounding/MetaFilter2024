<?php

declare(strict_types=1);

namespace App\Providers;

use App\View\Composers\Navigation\CreatePostButtonViewComposer;
use App\View\Composers\Navigation\GlobalNavigationViewComposer;
use App\View\Composers\Navigation\PrimaryNavigationViewComposer;
use App\View\Composers\Navigation\PrimarySidebarNavigationComposer;
use App\View\Composers\Navigation\SecondaryNavigationViewComposer;
use App\View\Composers\Navigation\UtilityNavigationViewComposer;
use Illuminate\Support\ServiceProvider;

final class ViewComposerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        /*
                view()->composer(
                    'layouts.site-footer.footer-links-navigation',
                    FooterLinksNavigationViewComposer::class,
                );

                view()->composer(
                    'layouts.site-footer.footer-member-links-navigation',
                    FooterMemberLinksViewComposer::class,
                );

                view()->composer(
                    'layouts.site-footer.footer-subsite-navigation',
                    FooterSubsiteNavigationViewComposer::class,
                );
        */
        view()->composer(
            'layouts.navigation.partials.create-post-button',
            CreatePostButtonViewComposer::class,
        );

        view()->composer(
            'layouts.navigation.global-navigation',
            GlobalNavigationViewComposer::class,
        );

        view()->composer(
            'layouts.partials.primary-sidebar',
            PrimarySidebarNavigationComposer::class,
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
