<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::controller(MyPostController::class)->prefix('my-posts')->group(function () {
        Route::get('', 'index')
            ->name(RouteNameEnum::ProjectsMyPostsIndex);

        Route::get('{post}/{slug}', 'show')
            ->name(RouteNameEnum::ProjectsMyPostsShow);

        Route::get('create', 'create')
            ->name(RouteNameEnum::ProjectsMyPostsCreate);

        Route::post('store', 'store')
            ->name(RouteNameEnum::ProjectsMyPostsStore);

        Route::get('preview/{post}', 'preview')
            ->name(RouteNameEnum::ProjectsMyPostsPreview);

        Route::get('edit/{post}', 'edit')
            ->name(RouteNameEnum::ProjectsMyPostsEdit);

        Route::post('update', 'update')
            ->name(RouteNameEnum::ProjectsMyPostsUpdate);
    });
});

Route::controller(PostController::class)
    ->group(function () {
        Route::get('', 'index')
            ->name(RouteNameEnum::ProjectsPostIndex);

        Route::get('{post}/{slug}', 'show')
            ->name(RouteNameEnum::ProjectsPostShow);
    });
