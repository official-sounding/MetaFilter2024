<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    'auth' => [
        [
            'name' => 'Profile',
            'route' => 'members.show',
            'icon' => 'person-fill',
        ],
        [
            'name' => 'Preferences',
            'route' => 'preferences.edit',
            'icon' => 'gear-fill',
        ],
        [
            'name' => 'Mail',
            'route' => 'mefi.mail.index',
            'icon' => 'envelope-fill',
        ],
        [
            'name' => 'Favorites',
            'route' => RouteNameEnum::FavoritesIndex->value,
            'icon' => 'heart-fill',
        ],
        [
            'name' => 'Recent Activity',
            'route' => 'metafilter.recent-activity.show',
            'icon' => 'clock-fill',
        ],
    ],
    'guest' => [
        [
            'name' => 'Log In',
            'route' => RouteNameEnum::AuthLoginCreate->value,
            'icon' => 'box-arrow-in-right',
        ],
        [
            'name' => 'Sign Up',
            'route' => 'signup',
            'icon' => 'person-plus-fill',
        ],
    ],
];
