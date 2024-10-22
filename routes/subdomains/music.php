<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::MusicPostIndex->value);

    Route::get('create-song', 'create')
        ->name(RouteNameEnum::MusicPostSongCreate->value);

    Route::get('create-talk', 'create')
        ->name(RouteNameEnum::MusicPostTalkCreate->value);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::MusicPostShow->value);
});
