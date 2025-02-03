<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::FanfarePostIndex);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::FanFarePostShow);
});

Route::controller(MyPostController::class)->prefix('my-posts')->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::FanFareMyPostsIndex);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::FanFarePostShow);

    Route::get('my-posts/create', 'create')
        ->name(RouteNameEnum::FanFareMyPostsCreate);

    Route::post('store', 'store')
        ->name(RouteNameEnum::FanFareMyPostsStore);

    Route::get('edit', 'edit')
        ->name(RouteNameEnum::FanFareMyPostsEdit);

    Route::post('update', 'update')
        ->name(RouteNameEnum::FanFareMyPostsUpdate);
});
