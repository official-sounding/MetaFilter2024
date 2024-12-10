<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    'auth' => [
        [
            'name' => 'Profile',
            'route' => RouteNameEnum::ProfileShow->value,
            'icon' => 'person-fill',
        ],
        [
            'name' => 'Preferences',
            'route' => RouteNameEnum::PreferencesEdit->value,
            'icon' => 'gear-fill',
        ],
        [
            'name' => 'Mail',
            'route' => RouteNameEnum::MailIndex->value,
            'icon' => 'envelope-fill',
        ],
        [
            'name' => 'Favorites',
            'route' => RouteNameEnum::FavoritesIndex->value,
            'icon' => 'heart-fill',
        ],
    ],
    'guest' => [
        [
            'name' => 'Log In',
            'route' => RouteNameEnum::AuthLoginCreate->value,
            'icon' => 'box-arrow-in-right',
        ],
        [
            'name' => 'Register',
            'route' => RouteNameEnum::AuthRegisterCreate->value,
            'icon' => 'box-arrow-in-right',
        ],
    ],
];
