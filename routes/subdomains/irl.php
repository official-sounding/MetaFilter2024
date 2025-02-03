<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::IrlPostIndex);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::IrlPostShow);
});

Route::controller(MyPostController::class)->prefix('my-posts')->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::IrlMyPostsIndex);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::IrlMyPostsShow);

    Route::get('my-posts/create', 'create')
        ->name(RouteNameEnum::IrlMyPostsCreate);

    Route::post('store', 'store')
        ->name(RouteNameEnum::IrlMyPostsStore);

    Route::get('edit', 'edit')
        ->name(RouteNameEnum::IrlMyPostsEdit);

    Route::post('update', 'update')
        ->name(RouteNameEnum::IrlMyPostsUpdate);
});
