<?php

declare(strict_types=1);

namespace App\Livewire\Auth;

use App\Enums\RouteNameEnum;
use App\Traits\LoggingTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

final class LoginComponent extends Component
{
    use LoggingTrait;

    public string $username;
    public string $password;

    public function render(): View
    {
        return view('livewire.auth.login-form');
    }

    public function login(): void
    {
        $validated = $this->validate([
            'username' => [
                'required',
                'string',
            ],
            'password' => [
                'required',
                'string',
            ],
        ]);

        if (Auth::attempt([
            'username' => $validated['username'],
            'password' => $validated['password'],
        ])) {
            $this->reset();

            session()->flash('message', trans('Login successful'));

            $redirectUrl = route(RouteNameEnum::MetaFilterPostIndex);

            $this->redirect($redirectUrl, navigate: true);

        } else {
            $this->logDebugMessage('Failed validation.');

            session()->flash('error', trans('Sorry, those credentials do not match our records'));
        }
    }
}
