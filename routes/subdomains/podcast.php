<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\Podcast\BestOfTheWebController;
use App\Http\Controllers\Podcast\OutOfTheBlueController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::controller(MyPostController::class)
        ->prefix('my-posts')
        ->group(function () {
            Route::get('', 'index')
                ->name(RouteNameEnum::PodcastMyPostsIndex);

            Route::get('{post}/{slug}', 'show')
                ->name(RouteNameEnum::PodcastMyPostsShow);

            Route::get('create', 'create')
                ->name(RouteNameEnum::PodcastMyPostsCreate);

            Route::post('store', 'store')
                ->name(RouteNameEnum::PodcastMyPostsStore);

            Route::get('edit', 'edit')
                ->name(RouteNameEnum::PodcastMyPostsEdit);

            Route::post('update', 'update')
                ->name(RouteNameEnum::PodcastMyPostsUpdate);
        });
});

Route::get('best-of-the-web', [BestOfTheWebController::class, 'index'])
    ->name(RouteNameEnum::PodcastBestOfTheWebIndex);

Route::get('out-of-the-blue', [OutOfTheBlueController::class, 'index'])
    ->name(RouteNameEnum::PodcastOutOfTheBlueIndex);

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::PodcastPostIndex);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::PodcastPostShow);
});
