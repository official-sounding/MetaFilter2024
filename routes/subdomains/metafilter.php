<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\ArchivesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\FundingController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PopularPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PreferencesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RandomPostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::middleware('auth')->group(function () {
    Route::get('favorites', [FavoritesController::class, 'index'])
        ->name(RouteNameEnum::FavoritesIndex);

    Route::get('preferences/{user}', [PreferencesController::class, 'edit'])
        ->name(RouteNameEnum::PreferencesEdit);

    Route::get('profile/{user:id}', [ProfileController::class, 'show'])
        ->name(RouteNameEnum::ProfileShow);

    Route::get('profile', [ProfileController::class, 'edit'])
       ->name(RouteNameEnum::ProfileEdit);

    Route::patch('profile', [ProfileController::class, 'update'])
        ->name(RouteNameEnum::ProfileUpdate);

    Route::delete('profile', [ProfileController::class, 'delete'])
        ->name(RouteNameEnum::ProfileDelete);
});

Route::get('about', [PageController::class, 'about'])
    ->name(RouteNameEnum::AboutMetaFilter);

Route::get('archives/{year?}/{month?}/{day?}', [ArchivesController::class, 'index'])
    ->name(RouteNameEnum::MetaFilterArchivesIndex);

Route::get('contact', [ContactController::class, 'create'])
    ->middleware(ProtectAgainstSpam::class)
    ->name(RouteNameEnum::ContactMessageCreate);

Route::get('funding', [FundingController::class, 'index'])
    ->name(RouteNameEnum::MetaFilterFundingIndex);

Route::get('language', [LanguageController::class, 'store'])
    ->name(RouteNameEnum::LanguageSwitcher);

Route::get('mail', [MailController::class, 'index'])
    ->name(RouteNameEnum::MailIndex);

Route::get('popular', [PopularPostController::class, 'index'])
    ->name(RouteNameEnum::MetaFilterPopularPostIndex);

Route::get('random', [RandomPostController::class, 'show'])
    ->name(RouteNameEnum::MetaFilterRandomPostShow);

Route::get('tags', [TagController::class, 'index'])
    ->name(RouteNameEnum::TagsIndex);

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::MetaFilterPostIndex);

    Route::get('create', 'create')
        ->name(RouteNameEnum::MetaFilterPostCreate);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::MetaFilterPostShow);
});
