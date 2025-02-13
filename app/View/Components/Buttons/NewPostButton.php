<?php

declare(strict_types=1);

namespace App\View\Components\Buttons;

use App\Traits\SubsiteTrait;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class NewPostButton extends Component
{
    use SubsiteTrait;

    public string $buttonText;
    public string $routeName;

    public function __construct()
    {
        $this->buttonText = $this->getNewPostText();
        $this->routeName = $this->getNewPostRouteName();
    }

    public function render(): View
    {
        return view('components.buttons.new-post-button', [
            'buttonText' => $this->buttonText,
            'routeName' => $this->routeName,
        ]);
    }
}
