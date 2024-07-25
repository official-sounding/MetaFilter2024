<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Traits\NavigationTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class FooterMemberLinksViewComposer implements ViewComposerInterface
{
    use NavigationTrait;

    public function compose(View $view): void
    {
        $navigation = '<ul class="navbar-menu" id="footer-member-links-navbar-menu">';

        $items = config('metafilter.navigation.footer-member-links');

        foreach ($items as $item) {
            $navigation .= $this->getNavigationItem($item, false, 'definition');
        }

        $navigation .= '</ul>';

        $view->with('footerMemberLinksNavigation', $navigation);
    }
}
