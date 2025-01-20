<?php

declare(strict_types=1);

namespace App\View\Composers\BannerLinks;

use App\Models\BannerLink;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class BannerLinkViewComposer implements ViewComposerInterface
{
    public function compose(View $view): void
    {
        $bannerLinks = BannerLink::all()->collect();

        $view->with([
            'bannerLinks' => $bannerLinks,
        ]);
    }
}
