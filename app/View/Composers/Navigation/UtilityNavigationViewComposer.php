<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Enums\PermissionEnum;
use App\Traits\LoggingTrait;
use App\Traits\NavigationTrait;
use App\Traits\SubsiteTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class UtilityNavigationViewComposer implements ViewComposerInterface
{
    use LoggingTrait;
    use NavigationTrait;
    use SubsiteTrait;

    public function compose(View $view): void
    {
        $navigation = '<ul id="utility-navigation-menu">';

        $items = auth()->check()
            ? config('metafilter.navigation.utility.auth')
            : config('metafilter.navigation.utility.guest');

        foreach ($items as $itemData) {
            $navigation .= $this->getNavigationItem($itemData);
        }

        if (auth()->check()) {
            $navigation .= $this->getNewPostButton();
            $navigation .= $this->getLogoutButton();

            if (auth()->user()->can(PermissionEnum::AccessAdminPanel->value)) {
                $navigation .= $this->getAdminButton();
            }
        }

        $navigation .= '</ul>';

        $view->with('utilityNavigation', $navigation);
    }
}
