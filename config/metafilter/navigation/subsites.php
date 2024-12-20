<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    'www' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::AboutIndex->value,
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::PostArchivesIndex->value,
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::TagsIndex->value,
        ],
        [
            'name' => 'Home',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::AboutIndex->value,
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::PostArchivesIndex->value,
        ],
    ],
    'ask' => [
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
    'fanfare' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::FanfarePostIndex->value,
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
    'irl' => [
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
    'jobs' => [
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
    'labs' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::LabsHomeIndex->value,
        ],
    ],
    'mail' => [
        [
            'name' => 'Mail Home',
            'route' => RouteNameEnum::MailIndex->value,
        ],
    ],
    'metatalk' => [
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
    'music' => [
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
    'podcast' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::PodcastPostIndex->value,
        ],
    ],
    'projects' => [
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
