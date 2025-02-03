<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\PopularPostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('popular-questions', [PopularPostController::class, 'index'])
    ->name(RouteNameEnum::AskPopularPostIndex);

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::AskPostIndex);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::AskPostShow);
});

Route::controller(MyPostController::class)->prefix('my-posts')->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::AskMyPostsIndex);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::AskPostShow);

    Route::get('my-posts/create', 'create')
        ->name(RouteNameEnum::AskMyPostsCreate);

    Route::post('store', 'store')
        ->name(RouteNameEnum::AskMyPostsStore);

    Route::get('edit', 'edit')
        ->name(RouteNameEnum::AskMyPostsEdit);

    Route::post('update', 'update')
        ->name(RouteNameEnum::AskMyPostsUpdate);
});
