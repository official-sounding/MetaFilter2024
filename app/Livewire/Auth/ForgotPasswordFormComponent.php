<?php

declare(strict_types=1);

namespace App\Livewire\Auth;

use App\Livewire\Auth\Forms\ForgotPasswordForm;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class ForgotPasswordFormComponent extends Component
{
    public ForgotPasswordForm $form;

    public function render(): View
    {
        return view('livewire.auth.forgot-password-form');
    }

    public function save() {}
}
