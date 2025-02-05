<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Enums\SubsiteEnum;

return [
    SubsiteEnum::Ask->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::AskPostIndex,
        ],
        [
            'name' => 'Popular Questions',
            'route' => RouteNameEnum::AskPopularQuestionsIndex,
        ],
        [
            'name' => 'Answered',
            'route' => RouteNameEnum::AskAnsweredQuestionsIndex,
        ],
        [
            'name' => 'Unanswered',
            'route' => RouteNameEnum::AskUnansweredQuestionsIndex,
        ],
    ],
    SubsiteEnum::FanFare->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::FanfarePostIndex,
        ],
        [
            'name' => 'FanFare Talk',
            'route' => RouteNameEnum::FanFareTalkIndex,
        ],
        [
            'name' => 'Clubs',
            'route' => RouteNameEnum::FanFareClubsIndex,
        ],
        [
            'name' => 'Water Cooler',
            'route' => RouteNameEnum::FanFareWaterCoolerIndex,
        ],
    ],
    SubsiteEnum::Irl->value => [
        [
            'name' => 'Upcoming Events',
            'route' => RouteNameEnum::IrlPostIndex,
        ],
        [
            'name' => 'Past Events',
            'route' => RouteNameEnum::IrlPastEventsIndex,
        ],
        [
            'name' => 'Future Events',
            'route' => RouteNameEnum::IrlFutureEventsIndex,
        ],
        [
            'name' => 'Proposed Events',
            'route' => RouteNameEnum::IrlProposedEventsIndex,
        ],
    ],
    SubsiteEnum::MetaFilter->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::MetaFilterPostIndex,
        ],
        [
            'name' => 'Popular Posts',
            'route' => RouteNameEnum::MetaFilterPopularPostsIndex,
        ],
        [
            'name' => 'Recent Comments',
            'route' => RouteNameEnum::MetaFilterRecentCommentsIndex,
        ],
        [
            'name' => 'My MeFi',
            'route' => RouteNameEnum::MetaFilterMyMeFiIndex,
        ],
        [
            'name' => 'My Favorites',
            'route' => RouteNameEnum::MetaFilterMyFavoritesIndex,
        ],
        [
            'name' => 'My Comments',
            'route' => RouteNameEnum::MetaFilterMyCommentsIndex,
        ],
    ],
    SubsiteEnum::MetaTalk->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::MetaTalkPostIndex,
        ],
        [
            'name' => 'Popular Posts',
            'route' => RouteNameEnum::MetaTalkPopularPostsIndex,
        ],
        [
            'name' => 'Recent Comments',
            'route' => RouteNameEnum::MetaTalkRecentCommentsIndex,
        ],
        [
            'name' => 'My Favorites',
            'route' => RouteNameEnum::MetaTalkMyFavoritesIndex,
        ],
    ],
    SubsiteEnum::Music->value => [
        [
            'name' => 'Songs',
            'route' => RouteNameEnum::MusicPostIndex,
        ],
        [
            'name' => 'Talk',
            'route' => RouteNameEnum::MusicTalkIndex,
        ],
        [
            'name' => 'Charts',
            'route' => RouteNameEnum::MusicChartsIndex,
        ],
        [
            'name' => 'Challenges',
            'route' => RouteNameEnum::MusicChallengesIndex,
        ],
    ],
    SubsiteEnum::Podcast->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::PodcastPostIndex,
        ],
        [
            'name' => 'Best of the Web',
            'route' => RouteNameEnum::PodcastBestOfTheWebIndex,
        ],
        [
            'name' => 'Out of the Blue',
            'route' => RouteNameEnum::PodcastOutOfTheBlueIndex,
        ],
    ],
];
