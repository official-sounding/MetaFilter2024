<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Enums\SubsiteEnum;

return [
    SubsiteEnum::Ask->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::AskPostIndex->value,
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
    ],
    SubsiteEnum::FanFare->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::FanFarePostIndex->value,
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
    ],
    'faq' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::FaqIndex->value,
        ],
    ],
    SubsiteEnum::Irl->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::IrlPostIndex->value,
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
    ],
    SubsiteEnum::Jobs->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::JobsPostIndex->value,
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
    ],
    SubsiteEnum::Labs->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::LabsHomeIndex->value,
        ],
    ],
    SubsiteEnum::Mail->value => [
        [
            'name' => 'Mail Home',
            'route' => RouteNameEnum::MeFiMailIndex->value,
        ],
    ],
    SubsiteEnum::MetaFilter->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'FAQ',
            'route' => RouteNameEnum::FaqIndex->value,
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterArchivesIndex->value,
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::TagsIndex->value,
        ],
        [
            'name' => 'Popular',
            'route' => RouteNameEnum::MetaFilterPopularPostsIndex->value,
        ],
        [
            'name' => 'Random',
            'route' => RouteNameEnum::MetaFilterRandomPostShow,
        ],
    ],
    SubsiteEnum::MetaTalk->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::MetaTalkPostIndex->value,
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
    ],
    SubsiteEnum::Music->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::MusicPostIndex->value,
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
    ],
    SubsiteEnum::Podcast->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::PodcastPostIndex->value,
        ],
    ],
    SubsiteEnum::Projects->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::ProjectsPostIndex->value,
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
    ],
];
