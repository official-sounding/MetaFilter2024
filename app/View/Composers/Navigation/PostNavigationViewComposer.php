<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Traits\NavigationTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class PostNavigationViewComposer implements ViewComposerInterface
{
    use NavigationTrait;

    public function compose(View $view): void
    {
        $navigation = '<ul class="post-navigation-menu">';

        $items = config('metafilter.navigation.post');

        foreach ($items as $item) {
            $navigation .= '<li>' . $this->getNavigationItem($item) . '</li>';
        }

        $navigation .= '<li><a href="#">Recent Posts</a></li>';
        $navigation .= '</ul>';

        $view->with('postNavigation', $navigation);
    }
}
