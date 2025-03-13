<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Enums\SubsiteEnum;

return [
    SubsiteEnum::Ask->value => [
        [
            'name' => 'Home',
            'route' => 'ask.posts.index',
        ],
        [
            'name' => 'About',
            'route' => 'metafilter.posts.index',
        ],
        [
            'name' => 'Archives',
            'route' => 'metafilter.posts.index',
        ],
        [
            'name' => 'Tags',
            'route' => 'metafilter.posts.index',
        ],
    ],
    SubsiteEnum::FanFare->value => [
        [
            'name' => 'Home',
            'route' => 'fanfare.posts.index',
        ],
        [
            'name' => 'About',
            'route' => 'metafilter.posts.index',
        ],
        [
            'name' => 'Archives',
            'route' => 'metafilter.posts.index',
        ],
        [
            'name' => 'Tags',
            'route' => 'metafilter.posts.index',
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
            'route' => 'irl.posts.index',
        ],
        [
            'name' => 'About',
            'route' => 'metafilter.posts.index',
        ],
        [
            'name' => 'Archives',
            'route' => 'metafilter.posts.index',
        ],
        [
            'name' => 'Tags',
            'route' => 'metafilter.posts.index',
        ],
    ],
    SubsiteEnum::Jobs->value => [
        [
            'name' => 'Home',
            'route' => 'jobs.posts.index',
        ],
        [
            'name' => 'About',
            'route' => 'metafilter.posts.index',
        ],
        [
            'name' => 'Archives',
            'route' => 'metafilter.posts.index',
        ],
        [
            'name' => 'Tags',
            'route' => 'metafilter.posts.index',
        ],
    ],
    SubsiteEnum::Labs->value => [
        [
            'name' => 'Home',
            'route' => 'labs.home.index',
        ],
    ],
    SubsiteEnum::Mail->value => [
        [
            'name' => 'Mail Home',
            'route' => 'mefi.mail.index',
        ],
    ],
    SubsiteEnum::MetaFilter->value => [
        [
            'name' => 'Home',
            'route' => 'metafilter.posts.index',
        ],
        [
            'name' => 'FAQ',
            'route' => RouteNameEnum::FaqIndex->value,
        ],
        [
            'name' => 'About',
            'route' => 'metafilter.posts.index',
        ],
        [
            'name' => 'Archives',
            'route' => 'metafilter.archives.index',
        ],
        [
            'name' => 'Tags',
            'route' => 'metafilter.tags.index',
        ],
        [
            'name' => 'Popular',
            'route' => 'metafilter.popular-posts.index',
        ],
        [
            'name' => 'Random',
            'route' => 'metafilter.random-post.show',
        ],
    ],
    SubsiteEnum::MetaTalk->value => [
        [
            'name' => 'Home',
            'route' => 'metatalk.posts.index',
        ],
        [
            'name' => 'About',
            'route' => 'metafilter.posts.index',
        ],
        [
            'name' => 'Archives',
            'route' => 'metafilter.posts.index',
        ],
        [
            'name' => 'Tags',
            'route' => 'metafilter.posts.index',
        ],
    ],
    SubsiteEnum::Music->value => [
        [
            'name' => 'Home',
            'route' => 'music.posts.index',
        ],
        [
            'name' => 'About',
            'route' => 'metafilter.posts.index',
        ],
        [
            'name' => 'Archives',
            'route' => 'metafilter.posts.index',
        ],
        [
            'name' => 'Tags',
            'route' => 'metafilter.posts.index',
        ],
    ],
    SubsiteEnum::Podcast->value => [
        [
            'name' => 'Home',
            'route' => 'podcast.posts.index',
        ],
    ],
    SubsiteEnum::Projects->value => [
        [
            'name' => 'Home',
            'route' => 'projects.posts.index',
        ],
        [
            'name' => 'About',
            'route' => 'metafilter.posts.index',
        ],
        [
            'name' => 'Archives',
            'route' => 'metafilter.posts.index',
        ],
        [
            'name' => 'Tags',
            'route' => 'metafilter.posts.index',
        ],
    ],
];
