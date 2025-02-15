<?php

declare(strict_types=1);

namespace App\Services;

use App\Http\Requests\Auth\StoreLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

final class AuthenticationService
{
    public function login(StoreLoginRequest $request): RedirectResponse
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => trans('Your credentials do not match our records.'),
        ])->onlyInput('email');
    }
}
