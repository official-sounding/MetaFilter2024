<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    'menu_items' => [
        [
            'name' => 'MetaFilter',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Ask MeFi',
            'route' => RouteNameEnum::AskPostIndex->value,
        ],
        [
            'name' => 'FanFare',
            'route' => RouteNameEnum::FanfarePostIndex->value,
        ],
        [
            'name' => 'Projects',
            'route' => RouteNameEnum::ProjectsPostIndex->value,
        ],
        [
            'name' => 'Music',
            'route' => RouteNameEnum::MusicPostIndex->value,
        ],
        [
            'name' => 'Jobs',
            'route' => RouteNameEnum::JobsPostIndex->value,
        ],
        [
            'name' => 'IRL',
            'route' => RouteNameEnum::IrlPostIndex->value,
        ],
        [
            'name' => 'MetaTalk',
            'route' => RouteNameEnum::MetaTalkPostIndex->value,
        ],
        [
            'name' => 'Best Of',
            'route' => RouteNameEnum::BestOfHomeIndex->value,
        ],
        [
            'name' => 'Podcast',
            'route' => RouteNameEnum::PodcastPostIndex->value,
        ],
        [
            'name' => 'Chat',
            'route' => RouteNameEnum::ChatHomeIndex->value,
        ],
        [
            'name' => 'Labs',
            'route' => RouteNameEnum::LabsHomeIndex->value,
        ],
        [
            'name' => 'Mall',
            'route' => RouteNameEnum::MallHomeIndex->value,
        ],
    ],
];
