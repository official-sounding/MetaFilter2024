<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    [
        'name' => 'Home',
        'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
    ],
    [
        'name' => 'Guidelines',
        'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
    ],
    [
        'name' => 'Content Policy',
        'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
    ],
    [
        'name' => 'Privacy Policy',
        'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
    ],
    [
        'name' => 'FAQ',
        'route' => RouteNameEnum::FAQ_INDEX->value,
    ],
    [
        'name' => 'About',
        'route' => RouteNameEnum::ABOUT_INDEX->value,
    ],
    [
        'name' => 'Archives',
        'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
    ],
    [
        'name' => 'Tags',
        'route' => RouteNameEnum::TAGS_INDEX->value,
    ],
    [
        'name' => 'Popular',
        'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
    ],
    [
        'name' => 'Random',
        'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
    ],
    [
        'name' => 'BIPOC Board',
        'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
    ],
    [
        'name' => 'Steering Committee',
        'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
    ],
    [
        'name' => 'Wiki',
        'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
    ],
    [
        'name' => 'Search',
        'route' => RouteNameEnum::SEARCH_CREATE->value,
    ],
    [
        'name' => 'Chat',
        'route' => RouteNameEnum::CHAT_HOME_INDEX->value,
    ],
    [
        'name' => 'Labs',
        'route' => RouteNameEnum::LABS_HOME_INDEX->value,
    ],
];
