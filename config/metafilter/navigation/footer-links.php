<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    [
        'name' => 'Home',
        'route' => RouteNameEnum::MetaFilterPostIndex,
    ],
    [
        'name' => 'Guidelines',
        'route' => RouteNameEnum::MetaFilterPostIndex,
    ],
    [
        'name' => 'Content Policy',
        'route' => RouteNameEnum::MetaFilterPostIndex,
    ],
    [
        'name' => 'Privacy Policy',
        'route' => RouteNameEnum::MetaFilterPostIndex,
    ],
    [
        'name' => 'FAQ',
        'route' => RouteNameEnum::FaqIndex,
    ],
    [
        'name' => 'About',
        'route' => RouteNameEnum::AboutMetaFilter,
    ],
    [
        'name' => 'Archives',
        'route' => RouteNameEnum::MetaFilterPostIndex,
    ],
    [
        'name' => 'Tags',
        'route' => RouteNameEnum::TagsIndex,
    ],
    [
        'name' => 'Popular',
        'route' => RouteNameEnum::MetaFilterPostIndex,
    ],
    [
        'name' => 'Random',
        'route' => RouteNameEnum::MetaFilterPostIndex,
    ],
    [
        'name' => 'BIPOC Board',
        'route' => RouteNameEnum::MetaFilterPostIndex,
    ],
    [
        'name' => 'Steering Committee',
        'route' => RouteNameEnum::MetaFilterPostIndex,
    ],
    [
        'name' => 'Wiki',
        'route' => RouteNameEnum::MetaFilterPostIndex,
    ],
    [
        'name' => 'Search',
        'route' => RouteNameEnum::SearchCreate,
    ],
    [
        'name' => 'Chat',
        'route' => RouteNameEnum::ChatHomeIndex,
    ],
    [
        'name' => 'Labs',
        'route' => RouteNameEnum::LabsHomeIndex,
    ],
];
