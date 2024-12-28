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
            'text' => 'Post a Question',
            'route' => RouteNameEnum::AskPostCreate->value,
        ],
    ],
    SubsiteEnum::Irl->value => [
        [
            'text' => 'Post a Question',
            'route' => RouteNameEnum::AskPostCreate->value,
        ],
    ],
    SubsiteEnum::MetaFilter->value => [
        [
            'text' => 'Post a Question',
            'route' => RouteNameEnum::AskPostCreate->value,
        ],
    ],
    SubsiteEnum::MetaTalk->value => [
        [
            'text' => 'Post a Question',
            'route' => RouteNameEnum::AskPostCreate->value,
        ],
    ],
    SubsiteEnum::Music->value => [
        [
            'text' => 'Post a Question',
            'route' => RouteNameEnum::AskPostCreate->value,
        ],
    ],
];
