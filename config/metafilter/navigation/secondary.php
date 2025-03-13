<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Enums\SubsiteEnum;

return [
    SubsiteEnum::Ask->value => [
        [
            'name' => 'Recent Posts',
            'route' => 'ask.posts.index',
            'login_required' => false,
        ],
        [
            'name' => 'Popular Questions',
            'route' => 'ask.popular-questions.index',
            'login_required' => false,
        ],
        [
            'name' => 'Answered',
            'route' => 'ask.answered-questions.index',
            'login_required' => false,
        ],
        [
            'name' => 'Unanswered',
            'route' => 'ask.unanswered-questions.index',
            'login_required' => false,
        ],
    ],
    SubsiteEnum::FanFare->value => [
        [
            'name' => 'Recent Posts',
            'route' => 'fanfare.posts.index',
            'login_required' => false,
        ],
        [
            'name' => 'FanFare Talk',
            'route' => 'fanfare.talk.index',
            'login_required' => false,
        ],
        [
            'name' => 'Clubs',
            'route' => 'fanfare.clubs.index',
            'login_required' => false,
        ],
        [
            'name' => 'Water Cooler',
            'route' => 'fanfare.water-cooler.index',
            'login_required' => false,
        ],
    ],
    SubsiteEnum::Irl->value => [
        [
            'name' => 'Upcoming Events',
            'route' => 'irl.posts.index',
            'login_required' => false,
        ],
        [
            'name' => 'Past Events',
            'route' => 'irl.past-events.index',
            'login_required' => false,
        ],
        [
            'name' => 'Future Events',
            'route' => 'irl.future-events.index',
            'login_required' => false,
        ],
        [
            'name' => 'Proposed Events',
            'route' => 'irl.proposed-events.index',
            'login_required' => false,
        ],
    ],
    SubsiteEnum::MetaFilter->value => [
        [
            'name' => 'Recent Posts',
            'route' => 'metafilter.posts.index',
            'login_required' => false,
        ],
        [
            'name' => 'Popular Posts',
            'route' => 'metafilter.popular-posts.index',
            'login_required' => false,
        ],
        [
            'name' => 'Recent Comments',
            'route' => 'metafilter.recent-comments.index',
            'login_required' => false,
        ],
        [
            'name' => 'My MeFi',
            'route' => RouteNameEnum::MetaFilterMyMeFiIndex->value,
            'login_required' => true,
        ],
        [
            'name' => 'My Favorites',
            'route' => RouteNameEnum::MetaFilterMyFavoritesIndex->value,
            'login_required' => true,
        ],
        [
            'name' => 'My Comments',
            'route' => RouteNameEnum::MetaFilterMyCommentsIndex->value,
            'login_required' => true,
        ],
    ],
    SubsiteEnum::MetaTalk->value => [
        [
            'name' => 'Recent Posts',
            'route' => 'metatalk.posts.index',
            'login_required' => false,
        ],
        [
            'name' => 'Popular Posts',
            'route' => 'metatalk.popular-posts.index',
            'login_required' => false,
        ],
        [
            'name' => 'Recent Comments',
            'route' => 'metatalk.recent-comments.index',
            'login_required' => false,
        ],
        [
            'name' => 'My Favorites',
            'route' => RouteNameEnum::MetaTalkMyFavoritesIndex->value,
            'login_required' => true,
        ],
    ],
    SubsiteEnum::Music->value => [
        [
            'name' => 'Songs',
            'route' => 'music.posts.index',
            'login_required' => false,
        ],
        [
            'name' => 'Talk',
            'route' => 'music.talk.index',
            'login_required' => false,
        ],
        [
            'name' => 'Charts',
            'route' => 'music.charts.index',
            'login_required' => false,
        ],
        [
            'name' => 'Challenges',
            'route' => 'music.challenges.index',
            'login_required' => false,
        ],
    ],
    SubsiteEnum::Podcast->value => [
        [
            'name' => 'Recent Posts',
            'route' => 'podcast.posts.index',
            'login_required' => false,
        ],
        [
            'name' => 'Best of the Web',
            'route' => 'podcast.best-of-the-web.index',
            'login_required' => false,
        ],
        [
            'name' => 'Out of the Blue',
            'route' => 'podcast.out-of-the-blue.index',
            'login_required' => false,
        ],
    ],
];
