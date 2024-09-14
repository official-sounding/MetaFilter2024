<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

Route::controller(FaqController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::FaqIndex->value);
});
