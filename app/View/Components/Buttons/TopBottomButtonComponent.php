<?php

declare(strict_types=1);

namespace App\View\Components\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class TopBottomButtonComponent extends Component
{
    public string $target;

    public function __construct()
    {
        $this->target = 'top-bottom';
    }

    public function render(): View|Closure|string
    {
        return view('components.buttons.top-bottom-button-component');
    }
}
