<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    'www' => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'Popular Posts',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'Recent Comments',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'My MeFi',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'My Favorites',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'My Comments',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
    ],
    'ask' => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::ASK_POST_INDEX->value,
        ],
        [
            'name' => 'Popular Questions',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'Answered',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'Unanswered',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'My Favorites',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'My Ask',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
    ],
    'fanfare' => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::FANFARE_POST_INDEX->value,
        ],
        [
            'name' => 'Recent Comments',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'FanFare Talk',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'Clubs',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'Watercooler',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'My FanFare',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
    ],
    'irl' => [
        [
            'name' => 'Upcoming Events',
            'route' => RouteNameEnum::IRL_POST_INDEX->value,
        ],
        [
            'name' => 'Past Events',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'Future Events',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'Proposed Events',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'Recently Posted',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'My IRL',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
    ],
    'metatalk' => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::METATALK_POST_INDEX->value,
        ],
        [
            'name' => 'Popular Posts',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'Recent Comments',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'My Favorites',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
    ],
    'music' => [
        [
            'name' => 'Songs',
            'route' => RouteNameEnum::MUSIC_POST_INDEX->value,
        ],
        [
            'name' => 'Talk',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'Charts',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'Challenges',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
    ],
    'podcast' => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::PODCAST_POST_INDEX->value,
        ],
        [
            'name' => 'Best of the Web',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
        [
            'name' => 'Out of the Blue',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
        ],
    ],
];
