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
            'name' => 'FAQ',
            'route' => RouteNameEnum::FaqIndex->value,
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
            'name' => 'Popular',
            'route' => RouteNameEnum::MetaFilterPopularPostIndex->value,
        ],
        [
            'name' => 'Random',
            'route' => RouteNameEnum::MetaFilterRandomPostShow->value,
        ],
    ],
    'ask' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::AskPostIndex->value,
        ],
        [
            'name' => 'FAQ',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
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
        [
            'name' => 'Popular',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Random',
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
        [
            'name' => 'Popular',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Random',
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
            'name' => 'FAQ',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
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
        [
            'name' => 'Random',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
    ],
    'jobs' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::JobsPostIndex->value,
        ],
        [
            'name' => 'FAQ',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
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
        [
            'name' => 'Random',
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
            'name' => 'Home',
            'route' => RouteNameEnum::MailIndex->value,
        ],
    ],
    'metatalk' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::MetaTalkPostIndex->value,
        ],
        [
            'name' => 'FAQ',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
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
        [
            'name' => 'Popular',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Random',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
    ],
    'music' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::MusicPostIndex->value,
        ],
        [
            'name' => 'FAQ',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
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
        [
            'name' => 'Popular',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Random',
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
            'name' => 'FAQ',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
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
        [
            'name' => 'Popular',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Random',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
    ],
];
