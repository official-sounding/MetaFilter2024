<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    [
        'name' => 'FAQ',
        'route' => RouteNameEnum::FaqIndex,
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
        'name' => 'BIPOC Board',
        'route' => RouteNameEnum::MetaFilterPostIndex,
    ],
];
