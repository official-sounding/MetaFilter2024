<?php

declare(strict_types=1);

namespace App\Livewire\Auth;

use App\Livewire\Auth\Forms\ResetPasswordForm;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class ResetPasswordComponent extends Component
{
    public ResetPasswordForm $form;

    public function render(): View
    {
        return view('livewire.auth.reset-password-form');
    }

    public function save() {}
}
