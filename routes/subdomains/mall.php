<?php

declare(strict_types=1);

use App\Http\Controllers\MallController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MallController::class, 'index'])
    ->name('mall.home.index');
