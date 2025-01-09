<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\MallController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MallController::class, 'index'])
    ->name(RouteNameEnum::MallHomeIndex);
