<?php

declare(strict_types=1);

namespace App\View\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class ButtonComponent extends Component
{
    public string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function render(): View
    {
        return view('components.forms.button');
    }
}
