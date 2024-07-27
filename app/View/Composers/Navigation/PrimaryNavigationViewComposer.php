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
        $navigation = null;

        $subdomain = $this->getSubdomainFromUrl();

        $items = config("metafilter.navigation.primary.$subdomain");

        if ($items === null) {
            $this->logError('Primary navigation items are null.');
        } else {
            foreach ($items as $item) {
                $navigation .= $this->getNavigationItem($item);
            }
        }

        $view->with('primaryNavigation', $navigation);
    }
}
