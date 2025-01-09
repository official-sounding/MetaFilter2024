<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Traits\LoggingTrait;
use App\Traits\NavigationTrait;
use App\Traits\SubsiteTrait;
use App\Traits\UrlTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class PrimaryNavigationViewComposer implements ViewComposerInterface
{
    use LoggingTrait;
    use NavigationTrait;
    use SubsiteTrait;
    use UrlTrait;

    public function compose(View $view): void
    {
        $navigation = '<ul>';

        $subdomain = $this->getSubdomainFromUrl();

        $key = "metafilter.navigation.primary.$subdomain";

        $this->logDebugMessage("Primary navigation key: $key");

        $items = config($key);

        if ($items === null) {
            $this->logError('Primary navigation items are null.');
        } else {
            foreach ($items as $item) {
                $navigation .= $this->getNavigationItem($item);
            }
        }

        $navigation .= '</ul>';

        $view->with('primaryNavigation', $navigation);
    }
}
