<?php

declare(strict_types=1);

use App\Enums\SubsiteEnum;
use App\Enums\RouteNameEnum;

return [
    SubsiteEnum::Ask->value => [
        [
            'text' => 'Post a Question',
            'route' => RouteNameEnum::AskPostCreate,
        ],
    ],
    SubsiteEnum::FanFare->value => [
        [
            'route' => RouteNameEnum::FanFarePostCreate,
        ],
    ],
    SubsiteEnum::Irl->value => [
        [
            'text' => 'Post an Event',
            'route' => RouteNameEnum::IrlPostCreate,
        ],
    ],
    SubsiteEnum::Jobs->value => [
        [
            'text' => 'Post a Job',
            'route' => RouteNameEnum::JobsPostJobCreate,
        ],
        [
            'text' => 'Post Your Availability',
            'route' => RouteNameEnum::JobsPostAvailabilityCreate,
        ],
    ],
    SubsiteEnum::MetaFilter->value => [
        [
            'route' => RouteNameEnum::MetaFilterPostCreate,
        ],
    ],
    SubsiteEnum::MetaTalk->value => [
        [
            'route' => RouteNameEnum::MetaTalkPostCreate,
        ],
    ],
    SubsiteEnum::Music->value => [
        [
            'text' => 'Post a Song',
            'route' => RouteNameEnum::MusicPostSongCreate,
        ],
        [
            'text' => 'Post to Music Talk',
            'route' => RouteNameEnum::MusicPostTalkCreate,
        ],
    ],
    SubsiteEnum::Projects->value => [
        [
            'text' => 'Post a Project',
            'route' => RouteNameEnum::ProjectsPostCreate,
        ],
    ],
];
