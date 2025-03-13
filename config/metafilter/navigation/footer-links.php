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
        'route' => 'metafilter.posts.index',
    ],
    [
        'name' => 'Content Policy',
        'route' => 'metafilter.posts.index',
    ],
    [
        'name' => 'Privacy Policy',
        'route' => 'metafilter.posts.index',
    ],
    [
        'name' => 'BIPOC Board',
        'route' => 'metafilter.posts.index',
    ],
];
