<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Traits\NavigationItemTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class FooterSubsiteNavigationViewComposer implements ViewComposerInterface
{
    use NavigationItemTrait;

    public function compose(View $view): void
    {
        $navigation = '<ul class="footer-subsite-menu">';

        $items = config('metafilter.seeders.subsites');

        $navigation .= '</ul>';

        $view->with('footerSubsiteNavigation', $navigation);
    }
}
