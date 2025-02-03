<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::MusicPostIndex);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::MusicPostShow);
});

Route::controller(MyPostController::class)->prefix('my-posts')->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::MusicMyPostsIndex);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::MusicMyPostsShow);

    Route::get('create-song', 'create')
        ->name(RouteNameEnum::MusicMyPostsSongCreate);

    Route::get('create-talk', 'create')
        ->name(RouteNameEnum::MusicMyPostsTalkCreate);

    Route::post('store', 'store')
        ->name(RouteNameEnum::MusicMyPostsStore);

    Route::get('edit', 'edit')
        ->name(RouteNameEnum::MusicMyPostsEdit);

    Route::post('update', 'update')
        ->name(RouteNameEnum::MusicMyPostsUpdate);
});

