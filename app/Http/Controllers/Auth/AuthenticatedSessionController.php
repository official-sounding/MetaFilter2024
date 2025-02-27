<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\StoreLoginRequest;
use App\Http\Requests\Auth\StoreLogoutRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

final class AuthenticatedSessionController extends Controller
{
    public function create(): View
    {
        return view('auth.login', [
            'title' => trans('Log In'),
        ]);
    }

    public function store(StoreLoginRequest $request): RedirectResponse
    {
        $rememberMe = $request->has('remember_me');

        if (Auth::attempt([
            'username' => $request->validated(key: 'username'),
            'password' => $request->validated(key: 'password'),
            // TODO: Check for active user
            // https://laravel.com/docs/12.x/authentication#specifying-additional-conditions
            'active' => 1,
        ])) {
            $request->session()->regenerate();

            return redirect()->intended();
        }

        return back()->withErrors([
            'username' => trans('The provided credentials do not match our records.)'),
        ])->onlyInput('username');
    }

    public function delete(StoreLogoutRequest $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect();
    }
}
