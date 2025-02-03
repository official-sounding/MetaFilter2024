<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::MetaTalkPostIndex);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::MetaTalkPostShow);
});

Route::controller(MyPostController::class)->prefix('my-posts')->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::MetaTalkMyPostsIndex);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::MetaTalkPostShow);

    Route::get('my-posts/create', 'create')
        ->name(RouteNameEnum::MetaTalkMyPostsCreate);

    Route::post('store', 'store')
        ->name(RouteNameEnum::MetaTalkMyPostsStore);

    Route::get('edit', 'edit')
        ->name(RouteNameEnum::MetaTalkMyPostsEdit);

    Route::post('update', 'update')
        ->name(RouteNameEnum::MetaTalkMyPostsUpdate);
});
