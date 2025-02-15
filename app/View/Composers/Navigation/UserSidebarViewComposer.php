<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Traits\NavigationTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class UserSidebarViewComposer implements ViewComposerInterface
{
    use NavigationTrait;

    public function compose(View $view): void
    {
        $navigation = '<ul class="sidebar-menu">';

        $items = config('metafilter.navigation.user-sidebar-links');

        foreach ($items as $itemData) {
            $navigation .= $this->getNavigationItem($itemData);
        }

        $navigation .= '</ul>';

        $view->with([
            'sidebarNavigation', $navigation,
            'user' => auth()->user(),
        ]);
    }
}
