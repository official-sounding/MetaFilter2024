<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\ArchivesController;
use App\Http\Controllers\ContactMessageController;
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
        ->name(RouteNameEnum::FAVORITES_INDEX->value);

    Route::get('preferences/{user}', [PreferencesController::class, 'edit'])
        ->name(RouteNameEnum::PREFERENCES_EDIT->value);

    Route::get('profile/{user:id}', [ProfileController::class, 'show'])
        ->name(RouteNameEnum::PROFILE_SHOW->value);

    Route::get('profile', [ProfileController::class, 'edit'])
       ->name(RouteNameEnum::PROFILE_EDIT->value);

    Route::patch('profile', [ProfileController::class, 'update'])
        ->name(RouteNameEnum::PROFILE_UPDATE->value);

    Route::delete('profile', [ProfileController::class, 'delete'])
        ->name(RouteNameEnum::PROFILE_DELETE->value);
});

Route::get('about', [PageController::class, 'show'])
    ->name(RouteNameEnum::ABOUT_INDEX->value);

Route::get('archives', [ArchivesController::class, 'index'])
    ->name(RouteNameEnum::POST_ARCHIVES_INDEX->value);

Route::get('contact', [ContactMessageController::class, 'create'])
    ->name(RouteNameEnum::CONTACT_MESSAGE_CREATE->value);

Route::get('funding', [FundingController::class, 'index'])
    ->name(RouteNameEnum::METAFILTER_FUNDING_INDEX->value);

Route::get('mail', [MailController::class, 'index'])
    ->name(RouteNameEnum::MAIL_INDEX->value);

Route::get('new-post', [PostController::class, 'create'])
    ->name(RouteNameEnum::METAFILTER_POST_CREATE->value);

Route::get('popular', [PopularPostController::class, 'index'])
    ->name(RouteNameEnum::METAFILTER_POPULAR_POST_INDEX->value);

Route::get('random', [RandomPostController::class, 'show'])
    ->name(RouteNameEnum::METAFILTER_RANDOM_POST_SHOW->value);

Route::get('tags', [TagController::class, 'index'])
    ->name(RouteNameEnum::TAGS_INDEX->value);

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::METAFILTER_POST_INDEX->value);

    Route::get('create', 'create')
        ->name(RouteNameEnum::METAFILTER_POST_CREATE->value);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::METAFILTER_POST_SHOW->value);
});
