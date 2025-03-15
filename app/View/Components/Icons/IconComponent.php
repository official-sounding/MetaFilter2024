<?php

declare(strict_types=1);

namespace App\View\Components\Icons;

use App\Traits\IconTrait;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class IconComponent extends Component
{
    use IconTrait;

    public string $altText = '';
    public string $class = '';
    public string $filename = '';
    public string $iconPath = '';
    public string $titleText = '';

    public function __construct(
        string $filename,
        string $altText = '',
        string $titleText = '',
        string $class = '',
    ) {
        $this->filename = $filename;
        $this->altText = $altText;
        $this->titleText = $titleText;
        $this->class = $class;
    }

    public function render(): View
    {
        $this->iconPath = $this->getIconPath($this->filename) ?: 'icon-path';

        return view('components.icons.icon-component', [
            'iconPath' => $this->iconPath,
            'altText' => $this->altText,
            'titleText' => $this->titleText,
            'class' => $this->class,
        ]);
    }
}
