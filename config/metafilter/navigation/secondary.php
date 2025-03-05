<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Enums\SubsiteEnum;

return [
    SubsiteEnum::Ask->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::AskPostIndex->value,
            'login_required' => false,
        ],
        [
            'name' => 'Popular Questions',
            'route' => RouteNameEnum::AskPopularQuestionsIndex->value,
            'login_required' => false,
        ],
        [
            'name' => 'Answered',
            'route' => RouteNameEnum::AskAnsweredQuestionsIndex->value,
            'login_required' => false,
        ],
        [
            'name' => 'Unanswered',
            'route' => RouteNameEnum::AskUnansweredQuestionsIndex->value,
            'login_required' => false,
        ],
    ],
    SubsiteEnum::FanFare->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::FanFarePostIndex->value,
            'login_required' => false,
        ],
        [
            'name' => 'FanFare Talk',
            'route' => RouteNameEnum::FanFareTalkIndex->value,
            'login_required' => false,
        ],
        [
            'name' => 'Clubs',
            'route' => RouteNameEnum::FanFareClubsIndex->value,
            'login_required' => false,
        ],
        [
            'name' => 'Water Cooler',
            'route' => RouteNameEnum::FanFareWaterCoolerIndex->value,
            'login_required' => false,
        ],
    ],
    SubsiteEnum::Irl->value => [
        [
            'name' => 'Upcoming Events',
            'route' => RouteNameEnum::IrlPostIndex->value,
            'login_required' => false,
        ],
        [
            'name' => 'Past Events',
            'route' => RouteNameEnum::IrlPastEventsIndex->value,
            'login_required' => false,
        ],
        [
            'name' => 'Future Events',
            'route' => RouteNameEnum::IrlFutureEventsIndex->value,
            'login_required' => false,
        ],
        [
            'name' => 'Proposed Events',
            'route' => RouteNameEnum::IrlProposedEventsIndex->value,
            'login_required' => false,
        ],
    ],
    SubsiteEnum::MetaFilter->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'login_required' => false,
        ],
        [
            'name' => 'Popular Posts',
            'route' => RouteNameEnum::MetaFilterPopularPostsIndex->value,
            'login_required' => false,
        ],
        [
            'name' => 'Recent Comments',
            'route' => RouteNameEnum::MetaFilterRecentCommentsIndex->value,
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
            'route' => RouteNameEnum::MetaTalkPostIndex->value,
            'login_required' => false,
        ],
        [
            'name' => 'Popular Posts',
            'route' => RouteNameEnum::MetaTalkPopularPostsIndex->value,
            'login_required' => false,
        ],
        [
            'name' => 'Recent Comments',
            'route' => RouteNameEnum::MetaTalkRecentCommentsIndex->value,
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
            'route' => RouteNameEnum::MusicPostIndex->value,
            'login_required' => false,
        ],
        [
            'name' => 'Talk',
            'route' => RouteNameEnum::MusicTalkIndex->value,
            'login_required' => false,
        ],
        [
            'name' => 'Charts',
            'route' => RouteNameEnum::MusicChartsIndex->value,
            'login_required' => false,
        ],
        [
            'name' => 'Challenges',
            'route' => RouteNameEnum::MusicChallengesIndex->value,
            'login_required' => false,
        ],
    ],
    SubsiteEnum::Podcast->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::PodcastPostIndex->value,
            'login_required' => false,
        ],
        [
            'name' => 'Best of the Web',
            'route' => RouteNameEnum::PodcastBestOfTheWebIndex->value,
            'login_required' => false,
        ],
        [
            'name' => 'Out of the Blue',
            'route' => RouteNameEnum::PodcastOutOfTheBlueIndex->value,
            'login_required' => false,
        ],
    ],
];
