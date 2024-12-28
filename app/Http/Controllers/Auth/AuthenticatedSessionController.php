<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

final class AuthenticatedSessionController extends BaseAuthController
{
    public function create(): View
    {
        return view('auth.login', [
            'title' => __('Log In'),
        ]);
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route(parent::INTENDED_ROUTE_NAME, absolute: false));
    }

    // TODO:: Use logout request?
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Auth::logout();

        return redirect(route(parent::REDIRECT_TO_ROUTE_NAME, absolute: false));
    }
}
