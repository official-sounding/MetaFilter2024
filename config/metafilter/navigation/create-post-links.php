<?php

declare(strict_types=1);

use App\Enums\SubsiteEnum;
use App\Enums\RouteNameEnum;

return [
    SubsiteEnum::Ask->value => [
        [
            'text' => 'Post a Question',
            'route' => RouteNameEnum::AskMyPostsCreate,
        ],
    ],
    SubsiteEnum::FanFare->value => [
        [
            'route' => RouteNameEnum::FanFareMyPostsCreate,
        ],
    ],
    SubsiteEnum::Irl->value => [
        [
            'text' => 'Post an Event',
            'route' => RouteNameEnum::IrlMyPostsCreate,
        ],
    ],
    SubsiteEnum::Jobs->value => [
        [
            'text' => 'Post a Job',
            'route' => RouteNameEnum::JobsMyPostsJobCreate,
        ],
        [
            'text' => 'Post Your Availability',
            'route' => RouteNameEnum::JobsMyPostsAvailabilityCreate,
        ],
    ],
    SubsiteEnum::MetaFilter->value => [
        [
            'route' => RouteNameEnum::MetaFilterMyPostsCreate,
        ],
    ],
    SubsiteEnum::MetaTalk->value => [
        [
            'route' => RouteNameEnum::MetaTalkMyPostsCreate,
        ],
    ],
    SubsiteEnum::Music->value => [
        [
            'text' => 'Post a Song',
            'route' => RouteNameEnum::MusicMyPostsSongCreate,
        ],
        [
            'text' => 'Post to Music Talk',
            'route' => RouteNameEnum::MusicMyPostsTalkCreate,
        ],
    ],
    SubsiteEnum::Projects->value => [
        [
            'text' => 'Post a Project',
            'route' => RouteNameEnum::ProjectsMyPostsCreate,
        ],
    ],
];
