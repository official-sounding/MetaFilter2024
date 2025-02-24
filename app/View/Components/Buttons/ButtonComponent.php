<?php

declare(strict_types=1);

namespace App\View\Components\Buttons;

use App\Dtos\ButtonDto;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class ButtonComponent extends Component
{
    public string $buttonText = '';
    public string $class = '';
    public string $iconFilename = '';
    public string $type = '';

    public function __construct(ButtonDto $dto)
    {
        $this->buttonText = $dto->buttonText;
        $this->class = $dto->class;
        $this->iconFilename = $dto->iconFilename;
        $this->type = $dto->type;
    }

    public function render(): View
    {
        return view('components.buttons.button-component');
    }
}
