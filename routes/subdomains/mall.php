<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\MallHomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MallHomePageController::class, 'index'])
    ->name(RouteNameEnum::MallHomeIndex->value);
