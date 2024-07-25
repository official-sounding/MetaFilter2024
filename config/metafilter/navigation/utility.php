<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    'auth' => [
        [
            'name' => 'Profile',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
            'class' => 'icon-user',
        ],
        [
            'name' => 'Preferences',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
            'class' => 'icon-user',
        ],
        [
            'name' => 'Mail',
            'route' => RouteNameEnum::MAIL_INDEX->value,
            'class' => 'icon-mail-alt',
        ],
        [
            'name' => 'Favorites',
            'route' => RouteNameEnum::METAFILTER_POST_INDEX->value,
            'class' => 'icon-heart',
        ],
    ],
];
