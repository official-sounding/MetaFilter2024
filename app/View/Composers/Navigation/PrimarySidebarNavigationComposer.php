<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Traits\LoggingTrait;
use App\Traits\NavigationItemTrait;
use App\Traits\SubsiteTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class PrimarySidebarNavigationComposer implements ViewComposerInterface
{
    use LoggingTrait;
    use NavigationItemTrait;
    use SubsiteTrait;

    protected string $subdomain;

    public function __construct()
    {
        $this->subdomain = $this->getSubdomain();
    }

    public function compose(View $view): void
    {
        $navigation = '<nav>';
        $navigation .= '<ul>';

        $items = config("metafilter.navigation.primary-sidebar-navigation.$this->subdomain");

        if ($items !== null) {
            foreach ($items as $item) {
                $navigation .= $this->getNavigationItem($item);
            }
        }

        $navigation .= '</ul>';
        $navigation .= '</nav>';

        $view->with('primarySidebarNavigation', $navigation);
    }
}
