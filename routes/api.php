<?php

declare(strict_types=1);

use App\Http\Controllers\Api\v1\LoginController;
use App\Http\Controllers\Api\v1\PostController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'api/v1/',
    'middleware' => ['auth:sanctum']
], function () {
    Route::post('login', [LoginController::class, 'store']);
    Route::post('posts', [PostController::class, 'store']);
});
