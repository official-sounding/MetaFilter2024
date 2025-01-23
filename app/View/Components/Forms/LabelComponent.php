<?php

declare(strict_types=1);

namespace App\View\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class LabelComponent extends Component
{
    public string $for;
    public string $label;
    public bool $required;

    public function __construct(string $label, string $for, bool $required = false)
    {
        $this->label = $label;
        $this->for = $for;
        $this->required = $required;
    }

    public function render(): View
    {
        return view('components.forms.label');
    }
}
