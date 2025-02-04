<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Enums\SubsiteEnum;

return [
    SubsiteEnum::Ask->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::AskPostIndex,
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
    ],
    SubsiteEnum::FanFare->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::FanfarePostIndex,
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
    ],
    'faq' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::FaqIndex,
        ],
    ],
    SubsiteEnum::Irl->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::IrlPostIndex,
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
    ],
    SubsiteEnum::Jobs->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::JobsPostIndex,
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
    ],
    SubsiteEnum::Labs->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::LabsHomeIndex,
        ],
    ],
    SubsiteEnum::Mail->value => [
        [
            'name' => 'Mail Home',
            'route' => RouteNameEnum::MeFiMailIndex,
        ],
    ],
    SubsiteEnum::MetaFilter->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'FAQ',
            'route' => RouteNameEnum::FaqIndex,
        ],
        [
            'name' => 'About',
//            'route' => RouteNameEnum::AboutMetaFilter,
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterArchivesIndex,
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::TagsIndex,
        ],
        [
            'name' => 'Popular',
            'route' => RouteNameEnum::MetaFilterPopularPostsIndex,
        ],
        [
            'name' => 'Random',
            'route' => RouteNameEnum::MetaFilterRandomPostShow,
        ],
    ],
    SubsiteEnum::MetaTalk->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::MetaTalkPostIndex,
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
    ],
    SubsiteEnum::Music->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::MusicPostIndex,
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
    ],
    SubsiteEnum::Podcast->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::PodcastPostIndex,
        ],
    ],
    SubsiteEnum::Projects->value => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::ProjectsPostIndex,
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
    ],
];
