<?php

declare(strict_types=1);

namespace App\View\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class FormComponent extends Component
{
    public string $action;
    public string $method;
    public string $class;
    public bool $showRequiredFieldsNote;
    public bool $upload;

    public function __construct(
        string $action,
        string $method = 'POST',
        string $class = '',
        bool $showRequiredFieldsNote = false,
        bool $upload = false
    ) {
        $this->action = $action;
        $this->method = $method;
        $this->class = $class;
        $this->showRequiredFieldsNote = $showRequiredFieldsNote;
        $this->upload = $upload;
    }

    public function render(): View
    {
        return view('components.forms.form');
    }
}
