<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\ChatHomePageController;
use Illuminate\Support\Facades\Route;

Route::get('', [ChatHomePageController::class, 'index'])
    ->name(RouteNameEnum::CHAT_HOME_INDEX->value);
