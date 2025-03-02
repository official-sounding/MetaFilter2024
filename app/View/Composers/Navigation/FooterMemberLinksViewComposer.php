<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Traits\NavigationItemTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class FooterMemberLinksViewComposer implements ViewComposerInterface
{
    use NavigationItemTrait;

    public function compose(View $view): void
    {
        $navigation = '<ul class="footer-members-menu">';

        $items = config('metafilter.navigation.footer-member-links');

        foreach ($items as $item) {
            $navigation .= $this->getNavigationItem($item);
        }

        $navigation .= '</ul>';

        $view->with('footerMemberLinksNavigation', $navigation);
    }
}
