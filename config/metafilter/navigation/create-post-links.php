<?php

declare(strict_types=1);

use App\Enums\SubsiteEnum;
use App\Enums\RouteNameEnum;

return [
    SubsiteEnum::Ask->value => [
        [
            'text' => 'Post a Question',
            'route' => RouteNameEnum::AskPostCreate->value,
        ],
    ],
    SubsiteEnum::FanFare->value => [
        [
            'route' => RouteNameEnum::FanFarePostCreate->value,
        ],
    ],
    SubsiteEnum::Irl->value => [
        [
            'text' => 'Post an Event',
            'route' => RouteNameEnum::IrlPostCreate->value,
        ],
    ],
    SubsiteEnum::Jobs->value => [
        [
            'text' => 'Post a Job',
            'route' => RouteNameEnum::JobsPostJobCreate->value,
        ],
        [
            'text' => 'Post Your Availability',
            'route' => RouteNameEnum::JobsPostAvailabilityCreate->value,
        ],
    ],
    SubsiteEnum::MetaFilter->value => [
        [
            'route' => RouteNameEnum::MetaFilterPostCreate->value,
        ],
    ],
    SubsiteEnum::MetaTalk->value => [
        [
            'route' => RouteNameEnum::MetaTalkPostCreate->value,
        ],
    ],
    SubsiteEnum::Music->value => [
        [
            'text' => 'Post a Song',
            'route' => RouteNameEnum::MusicPostSongCreate->value,
        ],
        [
            'text' => 'Post to Music Talk',
            'route' => RouteNameEnum::MusicPostTalkCreate->value,
        ],
    ],
    SubsiteEnum::Projects->value => [
        [
            'text' => 'Post a Project',
            'route' => RouteNameEnum::ProjectsPostCreate->value,
        ],
    ],
];
