<?php

declare(strict_types=1);

namespace App\View\Composers\Snippets;

use App\Models\Snippet;
use App\View\Composers\ViewComposerInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

final class SnippetViewComposer implements ViewComposerInterface
{
    public function compose(View $view): void
    {
        $snippets = Cache::rememberForever('snippets', function () {
            return Snippet::all()->collect();
        });

        $view->with(['snippets' => $snippets]);
    }
}
