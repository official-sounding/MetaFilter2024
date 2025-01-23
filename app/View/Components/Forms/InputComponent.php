<?php

declare(strict_types=1);

namespace App\View\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class InputComponent extends Component
{
    public string $label;
    public string $name;
    public string $type;
    public string $note;
    public string $icon;
    public bool $required;
    public bool $autofocus;

    public function __construct(
        string $label,
        string $name,
        string $type = 'text',
        string $note = '',
        string $icon = '',
        bool $required = false,
        bool $autofocus = false
    ) {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->note = $note;
        $this->icon = $icon;
        $this->required = $required;
        $this->autofocus = $autofocus;
    }

    public function render(): View
    {
        return view('components.forms.input');
    }
}
