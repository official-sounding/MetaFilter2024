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
        $navigationItems = '<ul class="dropdown">';

        $menuItems = config('metafilter.navigation.global.menu_items');

        foreach ($menuItems as $itemData) {
            $navigationItems .= $this->getNavigationItem($itemData);
        }

        $navigationItems .= '</ul>';

        return $navigationItems;
    }
}
