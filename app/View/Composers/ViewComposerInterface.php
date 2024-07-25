<?php

declare(strict_types=1);

namespace App\View\Composers;

use Illuminate\Contracts\View\View;

interface ViewComposerInterface
{
    public function compose(View $view): void;
}
