<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Traits\NavigationTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class FooterSubsiteNavigationViewComposer implements ViewComposerInterface
{
    use NavigationTrait;

    public function compose(View $view): void
    {
        $navigation = '<ul class="menu-list" id="footer-subsite-menu">';

        $items = $this->getItems();

        foreach ($items as $item) {
            if ($item['inFooterNav'] === true) {
                $navigation .= '<li>' . $this->getNavigationItem($item, true) . '</li>';
            }
        }

        $navigation .= '</ul>';

        $view->with('footerSubsiteNavigation', $navigation);
    }

    private function getItems(): array
    {
        $subsites = config('metafilter.seeders.subsites');

        return $this->sortItems($subsites);
    }
    /*
        private function filterItems(array $subsites): array
        {
            return array_filter($subsites, $isFooterItem, ARRAY_FILTER_USE_KEY);
        }
    */
    private function isFooterItem($key): bool
    {
        return array_key_exists('inFooterNav', $key) && $key['inFooterNav'] === true;
    }

    private function sortItems(array $items): array
    {
        usort($items, function ($a, $b) {
            return $a['footerNavigationSortOrder'] <=> $b['footerNavigationSortOrder'];
        });

        return $items;
    }
}
