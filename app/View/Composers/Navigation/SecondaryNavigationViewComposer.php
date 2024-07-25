<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Traits\LoggingTrait;
use App\Traits\NavigationTrait;
use App\Traits\SubsiteTrait;
use App\Traits\UrlTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class SecondaryNavigationViewComposer implements ViewComposerInterface
{
    use LoggingTrait;
    use NavigationTrait;
    use SubsiteTrait;
    use UrlTrait;

    public function compose(View $view): void
    {
        $navigation = '<ul id="secondary-navbar-menu">';

        $subdomain = $this->getSubdomainFromUrl();

        $items = config("metafilter.navigation.secondary.$subdomain");

        if ($items === null) {
            $this->logError('Secondary navigation items are null.');
        } else {
            foreach ($items as $item) {
                $navigation .= $this->getNavigationItem($item);
            }
        }

        $navigation .= '</ul>';

        $view->with('secondaryNavigation', $navigation);
    }
}
