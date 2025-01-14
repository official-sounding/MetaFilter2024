<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Traits\NavigationTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class GlobalNavigationViewComposer implements ViewComposerInterface
{
    use NavigationTrait;

    public function compose(View $view): void
    {
        $navigation = $this->getNavigationItems();

        $view->with('globalNavigation', $navigation);
    }

    private function getNavigationItems(): string
    {
        $navigationItems = '<ul>';

        $menuItems = config('metafilter.navigation.global.menu_items');

        foreach ($menuItems as $itemData) {
            if (isset($itemData['start_dropdown']) && $itemData['start_dropdown']) {
                $navigationItems .= '<li class="has-dropdown">';
                $navigationItems .= '<button class="dropdown-toggle" aria-expanded="false" aria-controls="global-navigation-menu">';
                $navigationItems .= trans('Menu');
                $navigationItems .= '</button>';
                $navigationItems .= '<ul class="dropdown-menu global-navigation-menu" id="global-navigation-menu">';
            }

            $navigationItems .= $this->getNavigationItem($itemData);
        }

        $navigationItems .= '</ul></ul>';

        return $navigationItems;
    }
}
