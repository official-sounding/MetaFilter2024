<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    'menu_items' => [
        [
            'name' => 'MetaFilter',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'Ask MeFi',
            'route' => RouteNameEnum::ASK_POST_INDEX->value,
        ],
        [
            'name' => 'Fanfare',
            'route' => RouteNameEnum::FANFARE_POST_INDEX->value,
        ],
        [
            'name' => 'Projects',
            'route' => RouteNameEnum::PROJECTS_POST_INDEX->value,
        ],
        [
            'name' => 'Music',
            'route' => RouteNameEnum::MUSIC_POST_INDEX->value,
        ],
        [
            'name' => 'Jobs',
            'route' => RouteNameEnum::JOBS_POST_INDEX->value,
        ],
        [
            'name' => 'IRL',
            'route' => RouteNameEnum::IRL_POST_INDEX->value,
        ],
        [
            'name' => 'MetaTalk',
            'route' => RouteNameEnum::METATALK_POST_INDEX->value,
        ],
        [
            'name' => 'Best Of',
            'route' => RouteNameEnum::BEST_OF_HOME_INDEX->value,
        ],
        [
            'name' => 'Podcast',
            'route' => RouteNameEnum::PODCAST_POST_INDEX->value,
        ],
        [
            'name' => 'Chat',
            'route' => RouteNameEnum::METACHAT_HOME_INDEX->value,
        ],
        [
            'name' => 'Labs',
            'route' => RouteNameEnum::LABS_HOME_INDEX->value,
        ],
        [
            'name' => 'Mall',
            'route' => RouteNameEnum::MALL_HOME_INDEX->value,
        ],
    ],
];
