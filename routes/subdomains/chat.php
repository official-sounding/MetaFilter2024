<?php

declare(strict_types=1);

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

Route::get('chat', [ChatController::class, 'index'])
    ->name('chat.home.index');
