<?php

declare(strict_types=1);

namespace App\Providers;

use App\View\Composers\Navigation\CreatePostButtonViewComposer;
use App\View\Composers\Navigation\FooterLinksNavigationViewComposer;
use App\View\Composers\Navigation\FooterSubsiteNavigationViewComposer;
use App\View\Composers\Navigation\GlobalNavigationViewComposer;
use App\View\Composers\Navigation\MemberNavigationViewComposer;
use App\View\Composers\Navigation\SecondaryNavigationViewComposer;
use App\View\Composers\Navigation\PrimaryNavigationViewComposer;
use App\View\Composers\Navigation\UserSidebarViewComposer;
use App\View\Composers\Navigation\UtilityNavigationViewComposer;
use App\View\Composers\Sidebar\TodayInHistoryViewComposer;
use App\View\Composers\Snippets\SnippetViewComposer;
use Illuminate\Support\ServiceProvider;

final class ViewComposerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        view()->composer(
            'layouts.site-footer.footer-links-navigation',
            FooterLinksNavigationViewComposer::class,
        );

        view()->composer(
            'layouts.site-footer.footer-subsite-navigation',
            FooterSubsiteNavigationViewComposer::class,
        );

        view()->composer(
            'layouts.navigation.partials.create-post-button',
            CreatePostButtonViewComposer::class,
        );

        view()->composer(
            'layouts.navigation.global-navigation',
            GlobalNavigationViewComposer::class,
        );

        view()->composer(
            'layouts.minimal',
            MemberNavigationViewComposer::class,
        );

        view()->composer(
            'layouts.navigation.secondary-navigation',
            SecondaryNavigationViewComposer::class,
        );

        view()->composer(
            [
                'layouts.partials.help-fund-mefi',
            ],
            SnippetViewComposer::class,
        );

        view()->composer(
            'layouts.navigation.primary-navigation',
            PrimaryNavigationViewComposer::class,
        );

        view()->composer(
            'layouts.sidebars.partials.today-in-mefi-history',
            TodayInHistoryViewComposer::class,
        );

        view()->composer(
            'layouts.sidebars.user-sidebar',
            UserSidebarViewComposer::class,
        );

        view()->composer(
            'layouts.navigation.utility-navigation',
            UtilityNavigationViewComposer::class,
        );
    }
}
