<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Traits\NavigationItemTrait;
use App\Traits\SubsiteTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class SecondaryNavigationViewComposer implements ViewComposerInterface
{
    use NavigationItemTrait;
    use SubsiteTrait;

    protected string $subdomain;

    public function __construct()
    {
        $this->subdomain = $this->getSubdomain();
    }

    public function compose(View $view): void
    {
        $navigation = '';

        $items = config("metafilter.navigation.secondary.$this->subdomain");

        if ($items === null) {
            $this->logError('Secondary navigation items are null.');
        } else {
            $navigation = '<ul class="secondary-navigation-menu">';

            foreach ($items as $item) {
                $navigation .= $this->getNavigationItem($item);
            }

            $navigation .= '</ul>';
        }


        $view->with('secondaryNavigation', $navigation);
    }
}
