<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    'www' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'house-door-fill',
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::AboutIndex->value,
            'icon' => 'info-square-fill',
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::PostArchivesIndex->value,
            'icon' => 'archive-fill',
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::TagsIndex->value,
            'icon' => 'tags-fill',
        ],
    ],
    'ask' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::AskPostIndex->value,
            'icon' => 'house-door-fill',
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'info-square-fill',
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'archive-fill',
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'tags-fill',
        ],
    ],
    'fanfare' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::FanfarePostIndex->value,
            'icon' => 'house-door-fill',
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'info-square-fill',
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'archive-fill',
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'tags-fill',
        ],
    ],
    'faq' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::FaqIndex->value,
            'icon' => 'house-door-fill',
        ],
    ],
    'irl' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::IrlPostIndex->value,
            'icon' => 'house-door-fill',
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'info-square-fill',
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'archive-fill',
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'tags-fill',
        ],
    ],
    'jobs' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::JobsPostIndex->value,
            'icon' => 'house-door-fill',
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'info-square-fill',
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'archive-fill',
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'tags-fill',
        ],
    ],
    'labs' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::LabsHomeIndex->value,
            'icon' => 'house-door-fill',
        ],
    ],
    'mail' => [
        [
            'name' => 'Mail Home',
            'route' => RouteNameEnum::MailIndex->value,
            'icon' => 'house-door-fill',
        ],
    ],
    'metatalk' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::MetaTalkPostIndex->value,
            'icon' => 'house-door-fill',
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'info-square-fill',
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'archive-fill',
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'tags-fill',
        ],
    ],
    'music' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::MusicPostIndex->value,
            'icon' => 'house-door-fill',
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'info-square-fill',
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'archive-fill',
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'tags-fill',
        ],
    ],
    'podcast' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::PodcastPostIndex->value,
            'icon' => 'house-door-fill',
        ],
    ],
    'projects' => [
        [
            'name' => 'Home',
            'route' => RouteNameEnum::ProjectsPostIndex->value,
            'icon' => 'house-door-fill',
        ],
        [
            'name' => 'About',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'info-square-fill',
        ],
        [
            'name' => 'Archives',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'archive-fill',
        ],
        [
            'name' => 'Tags',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'icon' => 'tags-fill',
        ],
    ],
];
