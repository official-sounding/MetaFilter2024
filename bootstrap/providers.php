<?php

declare(strict_types=1);

use App\Providers\AppServiceProvider;
use App\Providers\Filament\AdminPanelProvider;
use App\Providers\FortifyServiceProvider;
use App\Providers\HorizonServiceProvider;
use App\Providers\LivewireServiceProvider;
use App\Providers\RepositoryServiceProvider;
use App\Providers\TelescopeServiceProvider;
use App\Providers\ViewComposerServiceProvider;

return [
    AdminPanelProvider::class,
    AppServiceProvider::class,
    FortifyServiceProvider::class,
    HorizonServiceProvider::class,
    LivewireServiceProvider::class,
    RepositoryServiceProvider::class,
    TelescopeServiceProvider::class,
    ViewComposerServiceProvider::class,
];
