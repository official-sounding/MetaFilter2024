<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Traits\NavigationTrait;
use App\Traits\SubsiteTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class SecondaryNavigationViewComposer implements ViewComposerInterface
{
    use NavigationTrait;
    use SubsiteTrait;

    protected string $subdomain;

    public function __construct()
    {
        $this->subdomain = $this->getSubdomainFromUrl();
    }

    public function compose(View $view): void
    {
        $navigation = '';

        $items = config("metafilter.navigation.secondary-navigation.$this->subdomain");

        if ($items) {
            $navigation = '<ul class="secondary-navigation-menu">';

            foreach ($items as $item) {
                $navigation .= $this->getNavigationItem($item);
            }
        }

        $view->with('secondaryNavigation', $navigation);
    }
}
