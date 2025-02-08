<?php

declare(strict_types=1);

namespace App\Traits;

use App\Enums\RouteNameEnum;
use Throwable;

trait NavigationTrait
{
    use LoggingTrait;
    use RssTrait;
    use SubsiteTrait;

    public function getNavigationItem(
        array $itemData,
        bool $showRssLink = false,
    ): ?string {
        $item = '<li>';

        if (isset($itemData['route'])) {
            if ($showRssLink) {
                $item .= $this->getRssLink($itemData);
            }

            if (
                $itemData['route'] === 'preferences.edit' ||
                $itemData['route'] === 'members.show'
            ) {
                if (auth()->check()) {
                    $item .= '<a href="' . route($itemData['route'], [
                        'user' => auth()->user(),
                    ]) . '"';
                }
            } else {
                $item .= '<a href="' . route($itemData['route']) . '"';
            }

            if (request()->route()->getName() === $itemData['route']) {
                $item .= ' aria-current="page"';
            }

            $item .= '>';

            if (isset($itemData['icon'])) {
                $item .= $this->getIcon($itemData['icon']);
            }

            $text = $itemData['name'] ?? $itemData['nickname'] ?? $itemData['text'];

            $item .= trans($text);

            $item .= '</a>';
            $item .= '</li>';
        }

        return $item;
    }

    public function getAdminButton(): ?string
    {
        $itemData = [
            'route' => RouteNameEnum::AdminPanel,
            'icon' => 'lock-fill',
            'name' => 'Admin',
        ];

        return $this->getNavigationItem($itemData);
    }

    public function getLogoutButton(): string
    {
        try {
            $item = '<li>';
            $item .= view('layouts.navigation.partials.logout-form')->render();
            $item .= '</li>';

            return $item;
        } catch (Throwable $exception) {
            $this->logError($exception);

            return '';
        }
    }

    public function getNewPostButton(): string
    {
        $itemData = [
            'route' => $this->getNewPostRouteName(),
            'icon' => 'plus-square-fill',
            'name' => $this->getNewPostText(),
        ];

        return $this->getNavigationItem($itemData);
    }

    private function getRssLink(array $itemData): string
    {
        $rssUrl = $this->getRssUrl($itemData['subdomain']);
        $rssTitle = $itemData['name'] . ' RSS feed';

        $rssLink = '<a href="' . $rssUrl . '" class="rss" title="' . $rssTitle . '">';
        $rssLink .= '<span class="icon"><img src="' . asset('images/icons/rss-fill.svg') . '" alt=""></span>';
        $rssLink .= '<span class="visually-hidden">' . $rssTitle . '</span>';
        $rssLink .= '</a>';

        return $rssLink;
    }


    private function getIcon(string $iconFilename): string
    {
        $source = '/images/icons/' . $iconFilename . '.svg';

        return '<span class="icon"><img src="' . $source . '" alt=""></span>';
    }
}
