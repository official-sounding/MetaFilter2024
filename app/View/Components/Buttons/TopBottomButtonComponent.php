<?php

declare(strict_types=1);

namespace App\View\Components\Buttons;

use App\Traits\IconTrait;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class TopBottomButtonComponent extends Component
{
    use IconTrait;

    public string $buttonClass;
    public string $buttonText;
    public string $iconPath;
    public string $location;
    public string $targetId;

    private const array LOCATIONS = [
        'top',
        'bottom',
    ];

    public function __construct(string $location)
    {
        if (! in_array($location, self::LOCATIONS, true)) {
            return null;
        }

        $this->handle($location);
    }

    public function render(): View|Closure|string
    {
        return view('components.buttons.top-bottom-button-component');
    }

    private function handle(string $location): void
    {
        $this->location = $location;

        $iconFilename = $this->getIconFilename();

        $this->iconPath = $this->getIconPath($iconFilename);

        $this->buttonClass = $this->getButtonClass();

        $this->buttonText = $this->getButtonText();

        $this->targetId = '#' . $this->getTargetId();
    }

    private function getButtonClass(): string {
        return $this->location . '-button';
    }

    private function getButtonText(): string
    {
        return $this->location === 'top' ? trans('Bottom of page') : trans('Top of page');
    }

    private function getIconFilename(): string
    {
        return $this->location === 'top' ? trans('arrow-down-square') : trans('arrow-up-square');
    }

    private function getTargetId(): string
    {
        return $this->location === 'top' ? 'site-footer' : 'site-header';
    }
}
