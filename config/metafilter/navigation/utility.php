<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    'auth' => [
        [
            'name' => 'Profile',
            'route' => RouteNameEnum::ProfileShow,
            'icon' => 'person-fill',
        ],
        [
            'name' => 'Preferences',
            'route' => RouteNameEnum::PreferencesEdit,
            'icon' => 'gear-fill',
        ],
        [
            'name' => 'Mail',
            'route' => RouteNameEnum::MailIndex,
            'icon' => 'envelope-fill',
        ],
        [
            'name' => 'Favorites',
            'route' => RouteNameEnum::FavoritesIndex,
            'icon' => '',
        ],
        [
            'name' => 'Recent Activity',
            'route' => RouteNameEnum::MetaFilterPostIndex,
            'icon' => 'clock',
        ],
    ],
    'guest' => [
        [
            'name' => 'Log In',
            'route' => RouteNameEnum::AuthLoginCreate,
            'icon' => 'box-arrow-in-right',
        ],
        [
            'name' => 'Sign Up',
            'route' => RouteNameEnum::SignupCreate,
            'icon' => 'person-plus-fill',
        ],
    ],
];
