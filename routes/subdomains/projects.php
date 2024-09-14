<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::ProjectsPostIndex->value);

    Route::get('create', 'create')
        ->name(RouteNameEnum::ProjectsPostCreate->value);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::ProjectsPostShow->value);
});
