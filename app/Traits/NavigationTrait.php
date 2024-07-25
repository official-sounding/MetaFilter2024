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
            $logoutButton = view('layouts.navigation.partials.logout-button')->render();

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
            $item = '<li>';

            if ($showRssLink) {
                $item .= $this->getRssLink($itemData);
            }

            $item .= '<a href="' . route($itemData['route']) . '"';

            if (isset($itemData['class'])) {
                $item .= ' class="' . $itemData['class'] . '"';
            }

            if (Route::currentRouteName() === $itemData['route']) {
                $currentValue = isset($globalNavigation) && $globalNavigation === true ? 'location' : 'page';
                $item .= ' aria-current="' . $currentValue . '"';
            }

            $item .= '>';
            $item .= $itemData['nickname'] ?? $itemData['name'] ?? $itemData['text'];
            $item .= '</a>';

            $item .= '</li>';
        }

        return $item;
    }

    private function getRssLink(array $itemData): string
    {
        $rssUrl = $this->getRssUrl($itemData['subdomain']);
        $rssTitle = $itemData['name'] . ' RSS feed';

        $rssLink = '<a href="' . $rssUrl . '" class="rss icon-rss-1" title="' . $rssTitle . '">';
        $rssLink .= '<span class="visually-hidden">' . $rssTitle . '</span>';
        $rssLink .= '</a>';

        return $rssLink;
    }
}
