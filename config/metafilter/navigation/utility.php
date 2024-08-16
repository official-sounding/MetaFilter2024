<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    'auth' => [
        [
            'name' => 'Profile',
            'route' => RouteNameEnum::PROFILE_SHOW->value,
            'icon' => 'person-fill',
        ],
        [
            'name' => 'Preferences',
            'route' => RouteNameEnum::PREFERENCES_EDIT->value,
            'icon' => 'gear-fill',
        ],
        [
            'name' => 'Mail',
            'route' => RouteNameEnum::MAIL_INDEX->value,
            'icon' => 'envelope-fill',
        ],
        [
            'name' => 'Favorites',
            'route' => RouteNameEnum::FAVORITES_INDEX->value,
            'icon' => 'heart-fill',
        ],
    ],
    'guest' => [
        [
            'name' => 'Login',
            'route' => RouteNameEnum::AUTH_LOGIN_CREATE->value,
            'icon' => 'box-arrow-in-right',
        ],
        [
            'name' => 'Register',
            'route' => RouteNameEnum::AUTH_REGISTER_CREATE->value,
            'icon' => 'box-arrow-in-right',
        ],
    ],
];
