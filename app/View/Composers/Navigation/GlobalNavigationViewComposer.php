<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Traits\NavigationItemTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class GlobalNavigationViewComposer implements ViewComposerInterface
{
    use NavigationItemTrait;

    public function compose(View $view): void
    {
        $navigation = $this->getNavigationItems();

        $view->with('globalNavigation', $navigation);
    }

    private function getNavigationItems(): string
    {
        $navigation = '';

        $items = config('metafilter.navigation.global.menu_items');

        if ($items === null) {
            $this->logError('Global navigation items are null.');
        } else {
            $navigation = '<ul class="global-navigation-menu">';

            foreach ($items as $itemData) {
                if (isset($itemData['start_dropdown']) && $itemData['start_dropdown']) {
                    $navigation .= '<li class="has-dropdown">';
                    $navigation .= '<button class="dropdown-toggle" aria-expanded="false" aria-controls="global-navigation-menu">';
                    $navigation .= trans('Menu');
                    $navigation .= '</button>';
                    $navigation .= '<ul class="dropdown-menu global-navigation-menu" id="global-navigation-menu">';
                }

                $navigation .= $this->getNavigationItem($itemData);
            }

            $navigation .= '</ul></ul>';
        }

        return $navigation;
    }
}
