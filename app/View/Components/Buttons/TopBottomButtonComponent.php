<?php

declare(strict_types=1);

namespace App\View\Components\Buttons;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class TopBottomButtonComponent extends Component
{
    public string $buttonClass = '';
    public string $buttonText = '';
    public string $filename = '';
    public string $location = '';
    public string $targetId = '';

    private const array LOCATIONS = [
        'top',
        'bottom',
    ];

    public function __construct(string $location)
    {
        if (! in_array($location, self::LOCATIONS, true)) {
            return;
        }

        $this->handle($location);
    }

    private function handle(string $location): void
    {
        $this->location = $location;

        $this->buttonClass = $this->getButtonClass();

        $this->buttonText = $this->getButtonText();

        $this->filename = $this->getFilename();

        $this->targetId = '#' . $this->getTargetId();
    }

    public function render(): View
    {
        return view('components.buttons.top-bottom-button-component');
    }

    private function getButtonClass(): string
    {
        return $this->location . '-button';
    }

    private function getButtonText(): string
    {
        return $this->location === 'top' ? trans('Bottom of page') : trans('Top of page');
    }

    private function getFilename(): string
    {
        return $this->location === 'top' ? trans('arrow-down-square') : trans('arrow-up-square');
    }

    private function getTargetId(): string
    {
        return $this->location === 'top' ? 'site-footer' : 'site-header';
    }
}
