<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

final class VerifyEmailController extends BaseAuthController
{
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return $this->redirectVerifiedUser();
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return $this->redirectVerifiedUser();
    }

    private function redirectVerifiedUser(): RedirectResponse
    {
        return redirect()->intended(route(parent::INTENDED_ROUTE_NAME, absolute: false) . '?verified=1');
    }
}
