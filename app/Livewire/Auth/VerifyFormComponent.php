<?php

declare(strict_types=1);

namespace App\Livewire\Auth;

use App\Livewire\Auth\Forms\VerifyEmailForm;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class VerifyFormComponent extends Component
{
    public VerifyEmailForm $form;

    public function render(): View
    {
        return view('livewire.auth.verify-email-form');
    }

    public function save() {}
}
