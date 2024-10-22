<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::JobsPostIndex->value);

    Route::get('create-availability', 'create')
        ->name(RouteNameEnum::JobsPostAvailabilityCreate->value);

    Route::get('create-job', 'create')
        ->name(RouteNameEnum::JobsPostJobCreate->value);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::JobsPostShow->value);
});
