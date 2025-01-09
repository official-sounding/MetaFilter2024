<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    'menu_items' => [
        [
            'name' => 'MetaFilter',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Ask MeFi',
            'route' => RouteNameEnum::AskPostIndex,
        ],
        [
            'name' => 'FanFare',
            'route' => RouteNameEnum::FanfarePostIndex,
        ],
        [
            'name' => 'Projects',
            'route' => RouteNameEnum::ProjectsPostIndex,
        ],
        [
            'name' => 'Music',
            'route' => RouteNameEnum::MusicPostIndex,
        ],
        [
            'name' => 'Jobs',
            'route' => RouteNameEnum::JobsPostIndex,
        ],
        [
            'name' => 'IRL',
            'route' => RouteNameEnum::IrlPostIndex,
        ],
        [
            'name' => 'MetaTalk',
            'route' => RouteNameEnum::MetaTalkPostIndex,
        ],
        [
            'name' => 'Best Of',
            'route' => RouteNameEnum::BestOfHomeIndex,
            'start_dropdown' => true,
        ],
        [
            'name' => 'Podcast',
            'route' => RouteNameEnum::PodcastPostIndex,
        ],
        [
            'name' => 'Chat',
            'route' => RouteNameEnum::ChatHomeIndex,
        ],
        [
            'name' => 'Labs',
            'route' => RouteNameEnum::LabsHomeIndex,
        ],
        [
            'name' => 'Mall',
            'route' => RouteNameEnum::MallHomeIndex,
        ],
    ],
];
