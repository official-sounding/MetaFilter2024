<?php

declare(strict_types=1);

namespace App\Traits;

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

            if ($itemData['route'] === session('preferencesEditRoute') || $itemData['route'] === session('profileShowRoute')) {
                if (auth()->user()) {
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
                $source = '/images/icons/' . $itemData['icon'] . '.svg';

                $item .= '<img src="' . $source . '" class="icon ' . $itemData['icon'] . '" alt="">';
            }

            $item .= $itemData['name'] ?? $itemData['nickname'] ?? $itemData['text'];
            $item .= '</a>';
            $item .= '</li>';
        }

        return $item;
    }

    public function appendLogoutButton(): string
    {
        try {
            return view('layouts.navigation.partials.logout-form')->render();
        } catch (Throwable $exception) {
            $this->logError($exception);

            return '';
        }
    }

    private function getRssLink(array $itemData): string
    {
        $rssUrl = $this->getRssUrl($itemData['subdomain']);
        $rssTitle = $itemData['name'] . ' RSS feed';

        $rssLink = '<a href="' . $rssUrl . '" title="' . $rssTitle . '">';
        $rssLink .= '<img src="' . asset('images/icons/rss-fill.svg') . '" class="icon rss" alt="">
';
        $rssLink .= '<span class="visually-hidden">' . $rssTitle . '</span>';
        $rssLink .= '</a>';

        return $rssLink;
    }
}
