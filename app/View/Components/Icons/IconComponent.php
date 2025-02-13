<?php

declare(strict_types=1);

namespace App\View\Components\Icons;

use App\Traits\IconTrait;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class IconComponent extends Component
{
    use IconTrait;

    public string $filename;
    public ?string $altText;
    public ?string $titleText;

    public function __construct(string $filename, ?string $altText = null, ?string $titleText = null)
    {
        $this->filename = $filename;
        $this->altText = $altText;
        $this->titleText = $titleText;
    }

    public function render(): View
    {
        return view('components.icons.icon', [
            'filePath' => $this->getIconPath($this->filename),
            'altText' => $this->altText,
            'titleText' => $this->titleText,
        ]);
    }
}
