<?php

declare(strict_types=1);

namespace App\Livewire\Auth;

use App\Enums\RouteNameEnum;
use App\Traits\LoggingTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

final class LoginFormComponent extends Component
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

        $this->logDebugMessage('Username: ' . $validated['username']);
        $this->logDebugMessage('Password: ' . $validated['password']);

        if (Auth::attempt(
            [
                'username' => $validated['username'],
                'password' => $validated['password'],
            ],
        )) {
            $this->logDebugMessage('Passed validation.');

            $this->reset();

            // TODO: Translate messages

            session()->flash('message', 'Login successful.');

            $redirectUrl = route(RouteNameEnum::METAFILTER_POST_INDEX->value);
            $this->logDebugMessage('redirectUrl:' . $redirectUrl);

            $this->redirect($redirectUrl, navigate: true);

        } else {
            $this->logDebugMessage('Failed validation.');

            session()->flash('error', 'Sorry, those credentials do not match our records.');
        }
    }
}
