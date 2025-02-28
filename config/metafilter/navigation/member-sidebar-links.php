<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    [
        'name' => 'Account',
        'route' => RouteNameEnum::AskPostIndex->value,
    ],
    [
        'name' => 'Contacts',
        'route' => RouteNameEnum::AskPostIndex->value,
    ],
    [
        'name' => 'Favorites',
        'route' => RouteNameEnum::AskPostIndex->value,
    ],
    [
        'name' => 'Mail',
        'route' => RouteNameEnum::AskPostIndex->value,
    ],
    [
        'name' => 'Preferences',
        'route' => RouteNameEnum::AskPostIndex->value,
    ],
    [
        'name' => 'Profile',
        'route' => RouteNameEnum::AskPostIndex->value,
    ],
    [
        'name' => 'Recent Activity',
        'route' => RouteNameEnum::AskPostIndex->value,
    ],
];
