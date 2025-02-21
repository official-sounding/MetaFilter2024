<?php

declare(strict_types=1);

namespace App\View\Components\Buttons;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class CopyUrlButton extends Component
{
    public string $url = '';

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function render(): View
    {
        return view('components.buttons.copy-url-button', [
            'url' => $this->url,
        ]);
    }
}
