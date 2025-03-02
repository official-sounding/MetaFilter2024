<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Traits\NavigationItemTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class MemberNavigationViewComposer implements ViewComposerInterface
{
    use NavigationItemTrait;

    public function compose(View $view): void
    {
        $navigation = '';

        $items = config('metafilter.navigation.member-sidebar-links');

        if ($items === null) {
            $this->logError('Member navigation items are null.');
        } else {
            $navigation = '<ul class="sidebar-menu">';

            foreach ($items as $itemData) {
                $navigation .= $this->getNavigationItem($itemData);
            }

            $navigation .= '</ul>';
        }

        $view->with([
            'sidebarNavigation', $navigation,
            'user' => auth()->user(),
        ]);
    }
}
