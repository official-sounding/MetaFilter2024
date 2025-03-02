<?php

namespace App\View\Components\Dialogs;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class DialogComponent extends Component
{
    public string $buttonText;
    public string $routeName;

    public function __construct(string $buttonText, string $routeName)
    {
        $this->buttonText = $buttonText;
        $this->routeName = $routeName;
    }

    public function render(): View
    {
        return view('components.dialogs.dialog-component', [
            'buttonText' => $this->buttonText,
            'routeName' => $this->routeName,
        ]);
    }
}
