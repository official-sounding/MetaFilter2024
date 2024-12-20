<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

Route::get('', [ChatController::class, 'index'])
    ->name(RouteNameEnum::ChatHomeIndex->value);
