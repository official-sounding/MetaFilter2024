<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Traits\LoggingTrait;
use App\Traits\NavigationItemTrait;
use App\Traits\SubsiteTrait;
use App\Traits\UrlTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class PrimaryNavigationViewComposer implements ViewComposerInterface
{
    use LoggingTrait;
    use NavigationItemTrait;
    use SubsiteTrait;
    use UrlTrait;

    public function compose(View $view): void
    {
        $navigation = '';

        $subdomain = $this->getSubdomain();

        $key = "metafilter.navigation.primary.$subdomain";

        $items = config($key);

        if ($items !== null) {
            $navigation = '<ul class="primary-navigation-menu">';

            foreach ($items as $item) {
                $navigation .= $this->getNavigationItem($item);
            }

            $navigation .= '</ul>';
        }

        $view->with('primaryNavigation', $navigation);
    }
}
