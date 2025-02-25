<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\ArchivesController;
use App\Http\Controllers\BugController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\FundingController;
use App\Http\Controllers\MeFiMailController;
use App\Http\Controllers\MyCommentsController;
use App\Http\Controllers\MyFavoritesController;
use App\Http\Controllers\MyMeFiController;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PopularPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PreferencesController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RandomPostController;
use App\Http\Controllers\RecentActivityController;
use App\Http\Controllers\RecentCommentsController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::middleware('auth')->group(function () {
    Route::controller(BugController::class)->group(function () {
        Route::get('bugs', 'index')
            ->name(RouteNameEnum::BugsIndex);

        Route::get('bugs/create', 'create')
            ->name(RouteNameEnum::BugsCreate);
    });

    Route::get('favorites', [FavoritesController::class, 'index'])
        ->name(RouteNameEnum::FavoritesIndex);

    Route::get('preferences/{user}', [PreferencesController::class, 'edit'])
        ->name(RouteNameEnum::PreferencesEdit);


    Route::controller(MeFiMailController::class)->group(function () {
        Route::get('mefi-mail', 'index')
            ->name(RouteNameEnum::MeFiMailIndex);

        Route::get('mefi-mail/create', 'create')
            ->name(RouteNameEnum::MeFiMailCreate);

        Route::get('mefi-mail/{mail}', 'show')
            ->name(RouteNameEnum::MeFiMailShow);
    });

    Route::get('my-comments', [MyCommentsController::class, 'index'])
        ->name(RouteNameEnum::MetaFilterMyCommentsIndex);

    Route::get('my-favorites', [MyFavoritesController::class, 'index'])
        ->name(RouteNameEnum::MetaFilterMyFavoritesIndex);

    Route::get('my-mefi', [MyMeFiController::class, 'index'])
        ->name(RouteNameEnum::MetaFilterMyMeFiIndex);

    Route::controller(MyPostController::class)->prefix('my-posts')->group(function () {
        Route::get('', 'index')
            ->name(RouteNameEnum::MetaFilterMyPostsIndex);

        Route::get('{post}/{slug}', 'show')
            ->name(RouteNameEnum::MetaFilterMyPostsShow);

        Route::get('create', 'create')
            ->name(RouteNameEnum::MetaFilterMyPostsCreate);

        Route::post('store', 'store')
            ->name(RouteNameEnum::MetaFilterMyPostsStore);

        Route::get('preview/{post}', 'preview')
            ->name(RouteNameEnum::MetaFilterMyPostsPreview);

        Route::get('edit/{post}', 'edit')
            ->name(RouteNameEnum::MetaFilterMyPostsEdit);

        Route::post('update', 'update')
            ->name(RouteNameEnum::MetaFilterMyPostsUpdate);
    });

    Route::controller(MemberController::class)->group(function () {
        Route::get('members', [MemberController::class, 'edit'])
            ->name(RouteNameEnum::MemberEdit);

        Route::patch('members', [MemberController::class, 'update'])
            ->name(RouteNameEnum::MemberUpdate);

        Route::delete('members', [MemberController::class, 'delete'])
            ->name(RouteNameEnum::MemberDelete);
    });
});

Route::get('archives/{year?}/{month?}/{day?}', [ArchivesController::class, 'index'])
    ->name(RouteNameEnum::MetaFilterArchivesIndex);

Route::get('contact', [ContactMessageController::class, 'create'])
    ->middleware(ProtectAgainstSpam::class)
    ->name(RouteNameEnum::ContactMessageCreate);

Route::get('funding', [FundingController::class, 'index'])
    ->name(RouteNameEnum::MetaFilterFundingIndex);

Route::get('members', [MemberController::class, 'index'])
    ->name(RouteNameEnum::MemberIndex);

Route::get('members/{user:id}', [MemberController::class, 'show'])
    ->name(RouteNameEnum::MemberShow);

Route::get('popular-posts', [PopularPostController::class, 'index'])
    ->name(RouteNameEnum::MetaFilterPopularPostsIndex);

Route::get('random', [RandomPostController::class, 'show'])
    ->name(RouteNameEnum::MetaFilterRandomPostShow);

Route::get('recent-activity', [RecentActivityController::class, 'show'])
    ->name(RouteNameEnum::RecentActivityShow);

Route::get('recent-comments', [RecentCommentsController::class, 'index'])
    ->name(RouteNameEnum::MetaFilterRecentCommentsIndex);

Route::get('tags', [TagController::class, 'index'])
    ->name(RouteNameEnum::TagsIndex);

Route::controller(PostController::class)->group(function () {
    Route::get('', 'index')
        ->name(RouteNameEnum::MetaFilterPostIndex);

    Route::get('page/{page}', 'index');

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::MetaFilterPostShow);
});

Route::any('/{slug}', [PageController::class, 'show'])
    ->where('any', '^((?!about|donate).)*$');
