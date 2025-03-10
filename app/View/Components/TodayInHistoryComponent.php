<?php

declare(strict_types=1);

namespace App\View\Components;

use App\Traits\UrlTrait;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class TodayInHistoryComponent extends Component
{
    use UrlTrait;

    public function render(): View
    {
        return view('components.today-in-history-component', [
            'links' => $this->getLinks(),
        ]);
    }

    private function getLinks(): string
    {
        $yearsAgo = [1, 2, 3, 4, 5, 10, 20];

        $links = '';

        foreach ($yearsAgo as $year) {
            $dateUrl = $this->getDateUrl($year);

            $links .= '<li><a href="' . $dateUrl . '">' . $year . '</a></li>';
        }

        return $links;
    }
}
