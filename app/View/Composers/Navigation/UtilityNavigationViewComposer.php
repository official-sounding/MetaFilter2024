<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Traits\LoggingTrait;
use App\Traits\NavigationTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class UtilityNavigationViewComposer implements ViewComposerInterface
{
    use LoggingTrait;
    use NavigationTrait;

    public function compose(View $view): void
    {
        $navigation = '<ul class="dropdown">';

        $items = config('metafilter.navigation.utility.auth');

        foreach ($items as $itemData) {
            $navigation .= $this->getNavigationItem($itemData);
        }

        $navigation .= $this->appendLogoutButton();

        $navigation .= '</ul>';

        $view->with('utilityNavigation', $navigation);
    }
}
