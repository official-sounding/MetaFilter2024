<?php

declare(strict_types=1);

namespace App\Providers\Filament;

use App\Traits\LoggingTrait;
use Exception;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Joaopaulolndev\FilamentCheckSslWidget\FilamentCheckSslWidgetPlugin;
use Stephenjude\FilamentDebugger\DebuggerPlugin;
use Tobiasla78\FilamentSimplePages\FilamentSimplePagesPlugin;

final class AdminPanelProvider extends PanelProvider
{
    use LoggingTrait;

    public function panel(Panel $panel): Panel
    {
        try {
            return $panel
                ->default()
                ->id('admin')
                ->path('admin')
                ->login()
                ->colors([
                    'primary' => Color::Amber,
                ])
                ->darkMode(false)
                ->viteTheme('resources/css/filament/admin/theme.css')
                ->brandLogo(fn() => view('filament.admin.logo'))
                ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
                ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
                ->pages([
                    Dashboard::class,
                ])
                ->plugins([
                    DebuggerPlugin::make(),
                    FilamentCheckSslWidgetPlugin::make()
                        ->domains([
                            'ask.metafilter.com',
                            'bestof.metafilter.com',
                            'fanfare.metafilter.com',
                            'irl.metafilter.com',
                            'jobs.metafilter.com',
                            'music.metafilter.com',
                            'projects.metafilter.com',
                            'www.metafilter.com',
                        ]
                    ),
                    FilamentSimplePagesPlugin::make()
                        ->prefixSlug('page'),
                ])
                ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
                ->widgets([
                ])
                ->middleware([
                    EncryptCookies::class,
                    AddQueuedCookiesToResponse::class,
                    StartSession::class,
                    AuthenticateSession::class,
                    ShareErrorsFromSession::class,
                    VerifyCsrfToken::class,
                    SubstituteBindings::class,
                    DisableBladeIconComponents::class,
                    DispatchServingFilamentEvent::class,
                ])
                ->authMiddleware([
                    Authenticate::class,
                ]);
        } catch (Exception $exception) {
            $this->logError($exception);

            return $panel->default();
        }
    }
}
