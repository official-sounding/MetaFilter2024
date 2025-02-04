<?php

declare(strict_types=1);

namespace App\View\Composers\Sidebar;

use App\Traits\SubsiteTrait;
use App\Traits\UrlTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class TodayInHistoryViewComposer implements ViewComposerInterface
{
    use SubsiteTrait;
    use UrlTrait;

    protected string $subdomain;

    public function __construct()
    {
        $this->subdomain = $this->getSubdomain();
    }

    public function compose(View $view): void
    {
        $yearsAgo = [1, 2, 3, 4, 5, 10, 20];

        $navigation = '<nav>';
        $navigation .= '<ul>';

        foreach ($yearsAgo as $year) {
            $dateUrl = $this->getDateUrl($year);

            $navigation .= '<li><a href="' . $dateUrl . '">' . $year . '</a></li>';
        }

        $navigation .= '</ul>';
        $navigation .= '</nav>';

        $view->with('todayInHistoryNavigation', $navigation);
    }
}
