<?php

declare(strict_types=1);

namespace App\View\Composers\Sidebar;

use App\Traits\UrlTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class TodayInHistoryViewComposer implements ViewComposerInterface
{
    use UrlTrait;

    public function compose(View $view): void
    {
        $yearsAgo = [1, 2, 3, 4, 5, 10, 20];

        $navigation = '<nav>';
        $navigation .= '<ul>';

        foreach ($yearsAgo as $year) {
            $url = $this->getDateUrl($year);

            $navigation .= '<li><a href="' . $url . '">' . $year . '</a></li>';
        }

        $navigation .= '</ul>';
        $navigation .= '</nav>';

        $view->with('todayInHistoryNavigation', $navigation);
    }
}
