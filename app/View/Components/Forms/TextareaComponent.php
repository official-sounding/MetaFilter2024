<?php

declare(strict_types=1);

namespace App\View\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class TextareaComponent extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View
    {
        return view('components.forms.textarea');
    }
}
