<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::MUSIC_POST_INDEX->value);

    Route::get('create', 'create')
        ->name(RouteNameEnum::MUSIC_POST_CREATE->value);

    Route::get('{post}', 'show')
        ->name(RouteNameEnum::MUSIC_POST_SHOW->value);
});
