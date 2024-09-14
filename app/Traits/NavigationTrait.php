<?php

declare(strict_types=1);

namespace App\Traits;

use App\Enums\RouteNameEnum;
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
            return view('layouts.navigation.partials.logout-form')->render();
        } catch (Throwable $exception) {
            $this->logError($exception);

            return '';
        }
    }

    public function getNavigationItem(
        array $itemData,
        bool $showRssLink = false,
    ): ?string {
        $item = '<li>';

        if (isset($itemData['route'])) {
            if ($showRssLink) {
                $item .= $this->getRssLink($itemData);
            }

            if ($itemData['route'] === RouteNameEnum::PreferencesEdit->value) {
                if (auth()->user()) {
                    $item .= '<a href="' . route($itemData['route'], [
                        'user' => auth()->user(),
                    ]) . '"';
                }
            } elseif ($itemData['route'] === RouteNameEnum::ProfileShow->value) {
                if (auth()->user()) {
                    $item .= '<a href="' . route($itemData['route'], [
                        'user' => auth()->user(),
                    ]) . '"';
                }
            } else {
                $item .= '<a href="' . route($itemData['route']) . '"';
            }

            if (Route::currentRouteName() === $itemData['route']) {
                $item .= ' aria-current="page"';
            }

            $item .= '>';

            if (isset($itemData['icon'])) {
                $item .= '<img src="/images/icons/' . $itemData['icon'] . '.svg" class="icon ' . $itemData['icon'] . '" role="img" alt="">';
            }

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

        $rssLink = '<a href="' . $rssUrl . '" title="' . $rssTitle . '">';
        $rssLink .= '<img src="' . asset('images/icons/rss-fill.svg') . '" class="icon rss" role="img" alt="">
';
        $rssLink .= '<span class="visually-hidden">' . $rssTitle . '</span>';
        $rssLink .= '</a>';

        return $rssLink;
    }
}
