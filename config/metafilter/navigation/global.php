<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    'menu_items' => [
        [
            'name' => 'MetaFilter',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'in_dropdown' => false,
        ],
        [
            'name' => 'Ask MeFi',
            'route' => RouteNameEnum::AskPostIndex->value,
            'in_dropdown' => false,
        ],
        [
            'name' => 'FanFare',
            'route' => RouteNameEnum::FanfarePostIndex->value,
            'in_dropdown' => false,
        ],
        [
            'name' => 'Projects',
            'route' => RouteNameEnum::ProjectsPostIndex->value,
            'in_dropdown' => false,
        ],
        [
            'name' => 'Music',
            'route' => RouteNameEnum::MusicPostIndex->value,
            'in_dropdown' => false,
        ],
        [
            'name' => 'Jobs',
            'route' => RouteNameEnum::JobsPostIndex->value,
            'in_dropdown' => false,
        ],
        [
            'name' => 'IRL',
            'route' => RouteNameEnum::IrlPostIndex->value,
            'in_dropdown' => false,
        ],
        [
            'name' => 'MetaTalk',
            'route' => RouteNameEnum::MetaTalkPostIndex->value,
            'in_dropdown' => false,
        ],
        [
            'name' => 'Best Of',
            'route' => RouteNameEnum::BestOfHomeIndex->value,
            'in_dropdown' => true,

        ],
        [
            'name' => 'Podcast',
            'route' => RouteNameEnum::PodcastPostIndex->value,
            'in_dropdown' => true,
        ],
        [
            'name' => 'Chat',
            'route' => RouteNameEnum::ChatHomeIndex->value,
            'in_dropdown' => true,
        ],
        [
            'name' => 'Labs',
            'route' => RouteNameEnum::LabsHomeIndex->value,
            'in_dropdown' => true,
        ],
        [
            'name' => 'Mall',
            'route' => RouteNameEnum::MallHomeIndex->value,
            'in_dropdown' => true,
        ],
    ],
];
