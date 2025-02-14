<?php

declare(strict_types=1);

namespace App\View\Components\Buttons;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class ButtonComponent extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View
    {
        return view('components.buttons.button-component');
    }
}
