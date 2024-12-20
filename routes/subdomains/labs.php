<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\LabsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LabsController::class, 'index'])
    ->name(RouteNameEnum::LabsHomeIndex->value);
