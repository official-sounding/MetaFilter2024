<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    [
        'name' => 'Profile',
        'route' => RouteNameEnum::MetaFilterPostIndex->value,
    ],
    [
        'name' => 'Preferences',
        'route' => RouteNameEnum::MetaFilterPostIndex->value,
    ],
    [
        'name' => 'Favorites',
        'route' => RouteNameEnum::MetaFilterPostIndex->value,
    ],
    [
        'name' => 'Recent Activity',
        'route' => RouteNameEnum::MetaFilterPostIndex->value,
    ],
    [
        'name' => 'Contacts',
        'route' => RouteNameEnum::MetaFilterPostIndex->value,
    ],
    [
        'name' => 'New Post',
        'route' => RouteNameEnum::MetaFilterPostIndex->value,
    ],
    [
        'name' => 'Log Out',
        'route' => RouteNameEnum::MetaFilterPostIndex->value,
    ],
];
