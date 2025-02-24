<?php

declare(strict_types=1);

namespace App\View\Components\Buttons;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class LinkButtonComponent extends Component
{
    public string $buttonText = '';
    public string $iconFilename = '';
    public string $url = '';

    public function __construct()
    {
        $this->buttonText = $this->buttonText ?? '';
        $this->iconFilename = $this->iconFilename ?? '';
        $this->url = $this->url ?? '';
    }

    public function render(): View
    {
        return view('components.buttons.link-button', [
            'buttonText' => $this->buttonText,
            'iconFilename' => $this->iconFilename,
            'url' => $this->url,
        ]);
    }
}
