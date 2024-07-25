<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name(RouteNameEnum::AUTH_REGISTER_CREATE->value);

    Route::post('register', [RegisteredUserController::class, 'store'])
        ->name(RouteNameEnum::AUTH_REGISTER_STORE->value);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name(RouteNameEnum::AUTH_LOGIN_CREATE->value);

    Route::post('login', [AuthenticatedSessionController::class, 'store'])
        ->name(RouteNameEnum::AUTH_LOGIN_STORE->value);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name(RouteNameEnum::AUTH_FORGOT_PASSWORD_CREATE->value);

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name(RouteNameEnum::AUTH_FORGOT_PASSWORD_STORE->value);

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name(RouteNameEnum::AUTH_RESET_PASSWORD_CREATE->value);

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name(RouteNameEnum::AUTH_RESET_PASSWORD_STORE->value);
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])
        ->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name(RouteNameEnum::AUTH_LOGOUT->value);
});
