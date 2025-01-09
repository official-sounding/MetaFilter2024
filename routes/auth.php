<?php
/*

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\ConfirmablePasswordController;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

$domain = 'www.' . config('app.url');

Route::domain($domain)
    ->middleware('guest')->group(
        function () {
            Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name(RouteNameEnum::AuthForgotPasswordCreate);

            Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name(RouteNameEnum::AuthForgotPasswordStore);

            Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name(RouteNameEnum::AuthLoginCreate);

            Route::post('login', [AuthenticatedSessionController::class, 'store'])
                ->name(RouteNameEnum::AuthLoginStore)
                ->middleware([HandlePrecognitiveRequests::class]);

            Route::get('register', [RegisteredUserController::class, 'create'])
                ->name(RouteNameEnum::AuthRegisterCreate);

            Route::post('register', [RegisteredUserController::class, 'store'])
                ->name(RouteNameEnum::AuthRegisterStore);

            Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name(RouteNameEnum::AuthResetPasswordStore);

            Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name(RouteNameEnum::AuthResetPasswordCreate);
        },
    );

Route::domain($domain)
    ->middleware('auth')->group(
        function () {
            Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name(RouteNameEnum::AuthLogout);

            Route::get('user/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name(RouteNameEnum::AuthConfirmPasswordShow);

            Route::put('user/password', [ConfirmablePasswordController::class, 'show'])
                ->name(RouteNameEnum::AuthConfirmPasswordShow);

            Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
        },
    );


Route::domain('www.' . $appUrl)
    ->middleware('auth')->group(
        function () {
            Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

            Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

            Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');


            Route::put('password', [PasswordController::class, 'update'])
                ->name('password.update');
        },
    );
*/
