<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\Irl\FutureEventsController;
use App\Http\Controllers\Irl\PastEventsController;
use App\Http\Controllers\Irl\ProposedEventsController;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('future-events', [FutureEventsController::class, 'index'])
    ->name(RouteNameEnum::IrlFutureEventsIndex);

Route::get('past-events', [PastEventsController::class, 'index'])
    ->name(RouteNameEnum::IrlPastEventsIndex);

Route::get('proposed-events', [ProposedEventsController::class, 'index'])
    ->name(RouteNameEnum::IrlProposedEventsIndex);

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

    Route::get('create', 'create')
        ->name(RouteNameEnum::IrlMyPostsCreate);

    Route::post('store', 'store')
        ->name(RouteNameEnum::IrlMyPostsStore);

    Route::get('edit', 'edit')
        ->name(RouteNameEnum::IrlMyPostsEdit);

    Route::post('update', 'update')
        ->name(RouteNameEnum::IrlMyPostsUpdate);
});
