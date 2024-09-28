<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Enums\RouteNameEnum;
use App\Http\Requests\Auth\StorePasswordRequest;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password as PasswordFacade;
use Illuminate\Support\Str;
use Illuminate\View\View;

final class NewPasswordController extends BaseAuthController
{
    public function create(Request $request): View
    {
        return view('auth.reset-password', [
            'request' => $request,
        ]);
    }

    public function store(StorePasswordRequest $request): RedirectResponse
    {
        $request->validate($request->validated());

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise, we will parse the error and return the response.
        $status = PasswordFacade::reset(
            $request->only([
                'email',
                'password',
                'password_confirmation',
                'token',
            ]),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            },
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $status == PasswordFacade::PASSWORD_RESET
                    ? redirect()->route(RouteNameEnum::AuthLoginCreate->value)->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
    }
}
