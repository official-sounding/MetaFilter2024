<?php

declare(strict_types=1);

namespace App\View\Components\Icons;

use App\Traits\IconTrait;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class IconComponent extends Component
{
    use IconTrait;

    public string $filename = '';
    public string $iconPath = '';
    public ?string $altText = null;
    public ?string $titleText = null;

    public function __construct(
        string $filename,
        ?string $altText = null,
        ?string $titleText = null
    ) {
        $this->filename = $filename;
        $this->altText = $altText;
        $this->titleText = $titleText;
    }

    public function render(): View
    {
        $this->iconPath = $this->getIconPath($this->filename) ?? 'icon-path';
        \Log::debug('filename: ' . $this->filename);
        \Log::debug('iconPath: ' . $this->iconPath);
        return view('components.icons.icon-component', [
            'iconPath' => $this->iconPath,
            'altText' => $this->altText,
            'titleText' => $this->titleText,
        ]);
    }
}
