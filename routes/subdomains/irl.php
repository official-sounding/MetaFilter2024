<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::IRL_POST_INDEX->value);

    Route::get('create', 'create')
        ->name(RouteNameEnum::IRL_POST_CREATE->value);

    Route::get('{post}', 'show')
        ->name(RouteNameEnum::IRL_POST_SHOW->value);
});
