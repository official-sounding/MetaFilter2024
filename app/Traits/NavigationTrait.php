<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Support\Facades\Route;
use Throwable;

trait NavigationTrait
{
    use LoggingTrait;
    use RssTrait;
    use SubsiteTrait;

    public function appendLogoutButton(): string
    {
        try {
            $logoutButton = view('layouts.navigation.partials.logout-form')->render();

            return '<li>' . $logoutButton . '</li>';
        } catch (Throwable $exception) {
            $this->logError($exception);

            return '';
        }
    }

    public function getNavigationItem(
        array $itemData,
        bool $showRssLink = false,
    ): ?string {
        $item = null;

        if (isset($itemData['route'])) {
            if ($showRssLink) {
                $item .= $this->getRssLink($itemData);
            }

            $item .= '<a href="' . route($itemData['route']) . '"';
            $item .= 'class="navbar-item"';

            if (Route::currentRouteName() === $itemData['route']) {
                $currentValue = isset($globalNavigation) && $globalNavigation === true ? 'location' : 'page';
                $item .= ' aria-current="' . $currentValue . '"';
            }

            $item .= '>';
            $item .= $itemData['nickname'] ?? $itemData['name'] ?? $itemData['text'];
            $item .= '</a>';
        }

        return $item;
    }

    private function getRssLink(array $itemData): string
    {
        $rssUrl = $this->getRssUrl($itemData['subdomain']);
        $rssTitle = $itemData['name'] . ' RSS feed';

        $rssLink = '<a href="' . $rssUrl . '" title="' . $rssTitle . '">';
        $rssLink .= '<img src="/images/icons/rss-fill.svg" class="icon" role="img" alt="">
';
        $rssLink .= '<span class="visually-hidden">' . $rssTitle . '</span>';
        $rssLink .= '</a>';

        return $rssLink;
    }
}
