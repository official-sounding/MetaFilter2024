<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Enums\SubsiteEnum;

return [
    SubsiteEnum::Ask->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::AskPostIndex,
        ],
        [
            'name' => 'Popular Questions',
            'route' => RouteNameEnum::AskPopularPostIndex,
        ],
        [
            'name' => 'Answered',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Unanswered',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'My Favorites',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'My Ask',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
    ],
    SubsiteEnum::FanFare->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::FanfarePostIndex,
        ],
        [
            'name' => 'Recent Comments',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'FanFare Talk',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Clubs',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Water cooler',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'My FanFare',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
    ],
    SubsiteEnum::Irl->value => [
        [
            'name' => 'Upcoming Events',
            'route' => RouteNameEnum::IrlPostIndex,
        ],
        [
            'name' => 'Past Events',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Future Events',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Proposed Events',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Recently Posted',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'My IRL',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
    ],
    SubsiteEnum::MetaFilter->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Popular Posts',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Recent Comments',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'My MeFi',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'My Favorites',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'My Comments',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
    ],
    SubsiteEnum::MetaTalk->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::MetaTalkPostIndex,
        ],
        [
            'name' => 'Popular Posts',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Recent Comments',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'My Favorites',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
    ],
    SubsiteEnum::Music->value => [
        [
            'name' => 'Songs',
            'route' => RouteNameEnum::MusicPostIndex,
        ],
        [
            'name' => 'Talk',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Charts',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Challenges',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
    ],
    SubsiteEnum::Podcast->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::PodcastPostIndex,
        ],
        [
            'name' => 'Best of the Web',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Out of the Blue',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
    ],
];
