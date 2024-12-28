<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    [
        'name' => 'Home',
        'route' => RouteNameEnum::MetaFilterPostIndex->value,
    ],
    [
        'name' => 'Guidelines',
        'route' => RouteNameEnum::MetaFilterPostIndex->value,
    ],
    [
        'name' => 'Content Policy',
        'route' => RouteNameEnum::MetaFilterPostIndex->value,
    ],
    [
        'name' => 'Privacy Policy',
        'route' => RouteNameEnum::MetaFilterPostIndex->value,
    ],
    [
        'name' => 'FAQ',
        'route' => RouteNameEnum::FaqIndex->value,
    ],
    [
        'name' => 'About',
        'route' => RouteNameEnum::MetaFilterAboutIndex->value,
    ],
    [
        'name' => 'Archives',
        'route' => RouteNameEnum::MetaFilterPostIndex->value,
    ],
    [
        'name' => 'Tags',
        'route' => RouteNameEnum::TagsIndex->value,
    ],
    [
        'name' => 'Popular',
        'route' => RouteNameEnum::MetaFilterPostIndex->value,
    ],
    [
        'name' => 'Random',
        'route' => RouteNameEnum::MetaFilterPostIndex->value,
    ],
    [
        'name' => 'BIPOC Board',
        'route' => RouteNameEnum::MetaFilterPostIndex->value,
    ],
    [
        'name' => 'Steering Committee',
        'route' => RouteNameEnum::MetaFilterPostIndex->value,
    ],
    [
        'name' => 'Wiki',
        'route' => RouteNameEnum::MetaFilterPostIndex->value,
    ],
    [
        'name' => 'Search',
        'route' => RouteNameEnum::SearchCreate->value,
    ],
    [
        'name' => 'Chat',
        'route' => RouteNameEnum::ChatHomeIndex->value,
    ],
    [
        'name' => 'Labs',
        'route' => RouteNameEnum::LabsHomeIndex->value,
    ],
];
