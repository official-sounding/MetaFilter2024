<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\ArchivesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\FundingController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PopularPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PreferencesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RandomPostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('favorites', [FavoritesController::class, 'index'])
        ->name(RouteNameEnum::FavoritesIndex->value);

    Route::get('preferences/{user}', [PreferencesController::class, 'edit'])
        ->name(RouteNameEnum::PreferencesEdit->value);

    Route::get('profile/{user:id}', [ProfileController::class, 'show'])
        ->name(RouteNameEnum::ProfileShow->value);

    Route::get('profile', [ProfileController::class, 'edit'])
       ->name(RouteNameEnum::ProfileEdit->value);

    Route::patch('profile', [ProfileController::class, 'update'])
        ->name(RouteNameEnum::ProfileUpdate->value);

    Route::delete('profile', [ProfileController::class, 'delete'])
        ->name(RouteNameEnum::ProfileDelete->value);
});

Route::get('about', [PageController::class, 'about'])
    ->name(RouteNameEnum::MetaFilterAboutIndex->value);

Route::get('archives/{year?}/{month?}/{day?}', [ArchivesController::class, 'index'])
    ->name(RouteNameEnum::MetaFilterArchivesIndex->value);

Route::get('contact', [ContactController::class, 'create'])
    ->name(RouteNameEnum::ContactMessageCreate->value);

Route::get('funding', [FundingController::class, 'index'])
    ->name(RouteNameEnum::MetaFilterFundingIndex->value);

Route::get('mail', [MailController::class, 'index'])
    ->name(RouteNameEnum::MailIndex->value);

Route::get('new-post', [PostController::class, 'create'])
    ->name(RouteNameEnum::MetaFilterPostCreate->value);

Route::get('popular', [PopularPostController::class, 'index'])
    ->name(RouteNameEnum::MetaFilterPopularPostIndex->value);

Route::get('random', [RandomPostController::class, 'show'])
    ->name(RouteNameEnum::MetaFilterRandomPostShow->value);

Route::get('tags', [TagController::class, 'index'])
    ->name(RouteNameEnum::TagsIndex->value);

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::MetaFilterPostIndex->value);

    Route::get('create', 'create')
        ->name(RouteNameEnum::MetaFilterPostCreate->value);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::MetaFilterPostShow->value);
});
