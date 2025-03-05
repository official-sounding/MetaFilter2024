<?php

declare(strict_types=1);

namespace App\View\Components\Email;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class HtmlEmailParagraphComponent extends Component
{
    public string $paragraphText;

    public function __construct(string $paragraphText)
    {
        $this->paragraphText = $paragraphText;
    }

    public function render(): View
    {
        return view('components.email.html-email-paragraph-component', [
            'paragraphText' => $this->paragraphText,
        ]);
    }
}
