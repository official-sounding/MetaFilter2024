<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    'www' => [
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
            'route' => RouteNameEnum::AboutMetaFilter,
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
            'route' => RouteNameEnum::MetaFilterPopularPostIndex,
        ],
        [
            'name' => 'Random',
            'route' => RouteNameEnum::MetaFilterRandomPostShow,
        ],
    ],
    'ask' => [
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
    'fanfare' => [
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
    'irl' => [
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
    'jobs' => [
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
    'labs' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::LabsHomeIndex,
        ],
    ],
    'mail' => [
        [
            'name' => 'Mail Home',
            'route' => RouteNameEnum::MailIndex,
        ],
    ],
    'metatalk' => [
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
    'music' => [
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
    'podcast' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::PodcastPostIndex,
        ],
    ],
    'projects' => [
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
