<?php

declare(strict_types=1);

use App\Enums\SubsiteEnum;

return [
    SubsiteEnum::Ask->value => [
        [
            'text' => 'Post a Question',
            'route' => 'ask.posts.create',
        ],
    ],
    SubsiteEnum::FanFare->value => [
        [
            'route' => 'fanfare.posts.create',
        ],
    ],
    SubsiteEnum::Irl->value => [
        [
            'text' => 'Post an Event',
            'route' => 'irl.posts.create',
        ],
    ],
    SubsiteEnum::Jobs->value => [
        [
            'text' => 'Post a Job',
            'route' => 'jobs.posts.create',
        ],
        [
            'text' => 'Post Your Availability',
            'route' => 'jobs.availability.create',
        ],
    ],
    SubsiteEnum::MetaFilter->value => [
        [
            'route' => 'metafilter.posts.create',
        ],
    ],
    SubsiteEnum::MetaTalk->value => [
        [
            'route' => 'metatalk.posts.create',
        ],
    ],
    SubsiteEnum::Music->value => [
        [
            'text' => 'Post a Song',
            'route' => 'music.posts.create',
        ],
        [
            'text' => 'Post to Music Talk',
            'route' => 'music.talk.create',
        ],
    ],
    SubsiteEnum::Projects->value => [
        [
            'text' => 'Post a Project',
            'route' => 'projects.posts.create',
        ],
    ],
];
