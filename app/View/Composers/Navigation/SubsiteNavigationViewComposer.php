<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Traits\LoggingTrait;
use App\Traits\NavigationTrait;
use App\Traits\SubsiteTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class SubsiteNavigationViewComposer implements ViewComposerInterface
{
    use LoggingTrait;
    use NavigationTrait;
    use SubsiteTrait;

    public function compose(View $view): void
    {
        $subdomain = $this->getSubdomainFromUrl();

        $path = "metafilter.navigation.subsites.$subdomain";

        $items = config($path);

        $navigation = '<ul class="subsite-navigation-menu">';

        if ($items === null) {
            $this->logError('Subsite navigation items are null.');
        } else {
            foreach ($items as $item) {
                $navigation .= $this->getNavigationItem($item);
            }
        }

        $navigation .= '</ul>';

        $view->with('subsiteNavigation', $navigation);
    }
}
