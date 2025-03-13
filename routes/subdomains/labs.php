<?php

declare(strict_types=1);

use App\Http\Controllers\LabsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LabsController::class, 'index'])
    ->name('labs.home.index');
