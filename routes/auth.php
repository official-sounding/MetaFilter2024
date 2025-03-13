<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\RoutePath;

Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name(RouteNameEnum::AuthLoginCreate);

Route::post(RoutePath::for('login', '/login'), [AuthenticatedSessionController::class, 'store'])
    ->middleware(array_filter([
        'guest:' . config('fortify.guard'),
    ]))->name(RouteNameEnum::AuthLoginStore);

Route::post(RoutePath::for('logout', '/logout'), [AuthenticatedSessionController::class, 'destroy'])
    ->middleware([config('fortify.auth_middleware', 'auth') . ':' . config('fortify.guard')])
    ->name('logout');

Route::get(RoutePath::for('password.request', '/forgot-password'), [PasswordResetLinkController::class, 'create'])
    ->middleware(['guest:' . config('fortify.guard')])
    ->name(RouteNameEnum::AuthForgotPasswordCreate);

Route::post(RoutePath::for('password.email', '/forgot-password'), [PasswordResetLinkController::class, 'store'])
    ->middleware(['guest:' . config('fortify.guard')])
    ->name('password.email');

Route::get(RoutePath::for('password.reset', '/reset-password/{token}'), [NewPasswordController::class, 'create'])
    ->middleware(['guest:' . config('fortify.guard')])
    ->name('password.reset');

Route::post(RoutePath::for('password.update', '/reset-password'), [NewPasswordController::class, 'store'])
    ->middleware(['guest:' . config('fortify.guard')])
    ->name('password.update');

Route::get('signup', [RegisteredUserController::class, 'create'])
    ->name('signup');

Route::get('signup/thanks', [SignupController::class, 'thanks'])
    ->name('signup.thanks');

Route::get('signup/wizard', [SignupController::class, 'wizard'])
    ->name('signup.wizard');
