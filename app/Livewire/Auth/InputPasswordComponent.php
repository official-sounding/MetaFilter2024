<?php

declare(strict_types=1);

namespace App\Livewire\Auth;

use App\Traits\IconTrait;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class InputPasswordComponent extends Component
{
    use IconTrait;

    private const string EYE_CLOSED_TITLE = 'Show password';
    private const string EYE_OPEN_TITLE = 'Hide password';
    public string $eyeIconPath;
    public string $eyeIconTitleText;
    public string $eyeOpenIconPath;
    public string $eyeClosedIconPath;
    public string $type = 'password';

    public function mount(): void
    {
        $this->eyeClosedIconPath = $this->getIconPath('eye-slash-fill');
        $this->eyeOpenIconPath = $this->getIconPath('eye-fill');

        $this->eyeIconPath = $this->eyeClosedIconPath;
        $this->eyeIconTitleText = self::EYE_CLOSED_TITLE;
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
            $this->eyeIconTitleText = self::EYE_OPEN_TITLE;
        } else {
            $this->type = 'password';
            $this->eyeIconPath = $this->eyeClosedIconPath;
            $this->eyeIconTitleText = self::EYE_CLOSED_TITLE;
        }
    }
}
