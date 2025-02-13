<?php

namespace App\View\Components\Dialogs;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class DialogComponent extends Component
{
    public function render(): View
    {
        return view('components.dialogs.dialog-component', [
            'buttonText' => $this->buttonText,
            'routeName' => $this->routeName,
        ]);
    }

}
