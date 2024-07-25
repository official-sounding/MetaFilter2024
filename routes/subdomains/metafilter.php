<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\FundingController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('profile', [ProfileController::class, 'delete'])
        ->name('profile.delete');
});

// TODO: use PageController
Route::get('about', [ContactMessageController::class, 'create'])
    ->name('metafilter.about.index');

Route::get('mail', [MailController::class, 'index'])
    ->name('metafilter.mail.index');

Route::get('tags', [TagController::class, 'index'])
    ->name('metafilter.tags.index');

Route::get('contact', [ContactMessageController::class, 'create'])
    ->name('metafilter.contact-message.create');

Route::get('funding', [FundingController::class, 'index'])
    ->name(RouteNameEnum::METAFILTER_FUNDING_INDEX->value);

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::METAFILTER_POST_INDEX->value);

    Route::get('create', 'create')
        ->name(RouteNameEnum::METAFILTER_POST_CREATE->value);

    Route::get('{post}', 'show')
        ->name(RouteNameEnum::METAFILTER_POST_SHOW->value);
});
