<?php

declare(strict_types=1);

namespace App\View\Components\Email;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class HtmlEmailButtonComponent extends Component
{
    public string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function render(): View
    {
        return view('components.email.html-email-button-component', [
            'url' => $this->url,
        ]);
    }
}
