<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Enums\StatusEnum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class EmailVerificationNotificationController extends BaseAuthController
{
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route(parent::INTENDED_ROUTE_NAME, absolute: false));
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', StatusEnum::VERIFICATION_LINK_SENT);
    }
}
