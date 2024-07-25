<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\LabsHomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LabsHomePageController::class, 'index'])
    ->name(RouteNameEnum::LABS_HOME_INDEX->value);
