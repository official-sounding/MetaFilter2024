<?php

declare(strict_types=1);

use App\Providers\AppServiceProvider;
use App\Providers\Filament\AdminPanelProvider;
use App\Providers\LivewireServiceProvider;
use App\Providers\RepositoryServiceProvider;
use App\Providers\ViewComposerServiceProvider;

return [
    AppServiceProvider::class,
    AdminPanelProvider::class,
    LivewireServiceProvider::class,
    RepositoryServiceProvider::class,
    ViewComposerServiceProvider::class,
];
