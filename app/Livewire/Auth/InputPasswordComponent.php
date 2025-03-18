<?php

declare(strict_types=1);

namespace App\Livewire\Auth;

use App\Traits\IconTrait;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class InputPasswordComponent extends Component
{
    use IconTrait;

    public string $eyeIconPath;
    public string $eyeOpenIconPath;
    public ?string $label;
    public string $name;
    public string $eyeClosedIconPath;
    public bool $pressed = false;
    public string $type = 'password';

    public function mount(string $name = 'password', ?string $label = null): void
    {
        $this->label = $label;
        $this->name = $name;

        $this->eyeClosedIconPath = $this->getIconPath('eye-slash-fill');
        $this->eyeOpenIconPath = $this->getIconPath('eye-fill');

        $this->eyeIconPath = $this->eyeClosedIconPath;
    }

    public function render(): View
    {
        return view('livewire.auth.input-password-component');
    }

    public function togglePassword(): void
    {
        if ($this->type === 'password') {
            $this->type = 'text';
            $this->eyeIconPath = $this->eyeOpenIconPath;
            $this->pressed = true;
        } else {
            $this->type = 'password';
            $this->eyeIconPath = $this->eyeClosedIconPath;
            $this->pressed = false;
        }
    }
}
