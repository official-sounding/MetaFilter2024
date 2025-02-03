<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::JobsPostIndex);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::JobsPostShow);
});

Route::controller(MyPostController::class)->prefix('my-posts')->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::JobsMyPostsIndex);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::JobsMyPostsShow);

    Route::get('create-availability', 'create')
        ->name(RouteNameEnum::JobsMyPostsAvailabilityCreate);

    Route::get('create-job', 'create')
        ->name(RouteNameEnum::JobsMyPostsJobCreate);

    Route::post('store', 'store')
        ->name(RouteNameEnum::JobsMyPostsStore);

    Route::get('edit', 'edit')
        ->name(RouteNameEnum::JobsMyPostsEdit);

    Route::post('update', 'update')
        ->name(RouteNameEnum::JobsMyPostsUpdate);
});
