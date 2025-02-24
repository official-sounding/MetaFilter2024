<?php

declare(strict_types=1);

namespace App\View\Components\Buttons;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class HtmlEmailButtonComponent extends Component
{
    public string $buttonText;
    public string $url;

    public function __construct(string $buttonText, string $url)
    {
        $this->buttonText = $buttonText;
        $this->url = $url;
    }

    public function render(): View
    {
        return view('components.buttons.html-email-button-component', [
            'buttonText' => $this->buttonText,
            'url' => $this->url,
        ]);
    }
}
