<?php

declare(strict_types=1);

namespace App\View\Components\Buttons;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class ToggleComponent extends Component
{
    public string $labelText;

    public function __construct(string $labelText)
    {
        $this->labelText = $labelText;
    }

    public function render(): View
    {
        return view('components.buttons.toggle-component');
    }
}
