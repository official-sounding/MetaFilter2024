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
        $navigation = '<ul class="navbar-menu" id="global-navbar-menu">';

        $navigation .= $this->getNavigationItems('menu_items');
        $navigation .= $this->getDropdown();

        $navigation .= '</ul>';

        $view->with('globalNavigation', $navigation);
    }

    private function getDropdown(): string
    {
        $buttonId = 'more-sites-dropdown';

        $dropdown = '<li class="has-dropdown">';
        $dropdown .= '<button type="button" class="navbar-item dropdown-toggle" aria-expanded="false" ';
        $dropdown .= 'aria-controls="' . $buttonId . '">';
        $dropdown .= 'More';
        $dropdown .= '</button>';
        $dropdown .= '<ul class="dropdown-menu" aria-hidden="true" id="' . $buttonId . '">';

        $dropdown .= $this->getNavigationItems('dropdown_items');

        $dropdown .= '</ul>';
        $dropdown .= '</li>';

        return $dropdown;
    }

    private function getNavigationItems(string $items): string
    {
        $navigationItems = '';

        $menuItems = config("metafilter.navigation.global.$items");

        foreach ($menuItems as $itemData) {
            $navigationItems .= $this->getNavigationItem($itemData);
        }

        return $navigationItems;
    }
}
