<?php

declare(strict_types=1);

namespace App\View\Components\Popovers;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class PopoverComponent extends Component
{
    public function __construct(
        public string $buttonText,
        public string $popoverText,
        public bool $showInfoIcon = true,
        public ?string $routeName,
    ) {
    }

    public function render(): View
    {
        return view('components.popovers.popover-component', [
            'buttonText' => $this->buttonText,
            'popoverText' => $this->popoverText,
            'routeName' => $this->routeName,
            'popoverId' => $this->getPopoverId(),
        ]);
    }

    private function getPopoverId(): string
    {
        return 'popover-' . uuid_create();
    }
}
