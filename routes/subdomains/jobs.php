<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\Jobs\PostJobController;
use App\Http\Controllers\Posts\MyPostController;
use App\Http\Controllers\Posts\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('create', [PostJobController::class, 'create'])
        ->name(RouteNameEnum::JobsMyPostsCreate);

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

        Route::get('preview/{post}', 'preview')
            ->name(RouteNameEnum::JobsMyPostsPreview);

        Route::get('edit/{post}', 'edit')
            ->name(RouteNameEnum::JobsMyPostsEdit);

        Route::post('update', 'update')
            ->name(RouteNameEnum::JobsMyPostsUpdate);
    });
});

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::JobsPostIndex);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::JobsPostShow);
});
