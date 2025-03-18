<?php

declare(strict_types=1);

namespace App\View\Composers\Navigation;

use App\Traits\NavigationItemTrait;
use App\Traits\SubsiteTrait;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;

final class CreatePostButtonViewComposer implements ViewComposerInterface
{
    use NavigationItemTrait;
    use SubsiteTrait;

    protected string $subdomain;

    public const string DEFAULT_TEXT = 'Create Post';

    public function __construct()
    {
        $this->subdomain = $this->getSubdomain();
    }

    public function compose(View $view): void
    {
        $createPost = '';

        $items = config("metafilter.navigation.create-post-links.$this->subdomain");

        if ($items !== null) {
            foreach ($items as $item) {
                if (!isset($item['text'])) {
                    $item['text'] = self::DEFAULT_TEXT;
                }

                $createPost .= $this->getNavigationItem($item);
            }
        }

        $view->with([
            'defaultText' => self::DEFAULT_TEXT,
            'createPost' => $createPost,
            'items' => $items,
        ]);
    }
}
