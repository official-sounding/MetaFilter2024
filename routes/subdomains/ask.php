<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\PopularPostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('popular-questions', [PopularPostController::class, 'index'])
    ->name(RouteNameEnum::AskPopularPostIndex);

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::AskPostIndex);

    Route::get('create', 'create')
        ->name(RouteNameEnum::AskPostCreate);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::AskPostShow);
});
