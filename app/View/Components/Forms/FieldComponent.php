<?php

declare(strict_types=1);

namespace App\View\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class FieldComponent extends Component
{
    public string $note;

    public function __construct(string $note = '')
    {
        $this->note = $note;
    }

    public function render(): View
    {
        return view('components.forms.field');
    }
}
