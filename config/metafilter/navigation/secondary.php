<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Enums\SubsiteEnum;

return [
    SubsiteEnum::Ask->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::AskPostIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'Popular Questions',
            'route' => RouteNameEnum::AskPopularQuestionsIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'Answered',
            'route' => RouteNameEnum::AskAnsweredQuestionsIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'Unanswered',
            'route' => RouteNameEnum::AskUnansweredQuestionsIndex,
            'authorization_required' => false,
        ],
    ],
    SubsiteEnum::FanFare->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::FanfarePostIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'FanFare Talk',
            'route' => RouteNameEnum::FanFareTalkIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'Clubs',
            'route' => RouteNameEnum::FanFareClubsIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'Water Cooler',
            'route' => RouteNameEnum::FanFareWaterCoolerIndex,
            'authorization_required' => false,
        ],
    ],
    SubsiteEnum::Irl->value => [
        [
            'name' => 'Upcoming Events',
            'route' => RouteNameEnum::IrlPostIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'Past Events',
            'route' => RouteNameEnum::IrlPastEventsIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'Future Events',
            'route' => RouteNameEnum::IrlFutureEventsIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'Proposed Events',
            'route' => RouteNameEnum::IrlProposedEventsIndex,
            'authorization_required' => false,
        ],
    ],
    SubsiteEnum::MetaFilter->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::MetaFilterPostIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'Popular Posts',
            'route' => RouteNameEnum::MetaFilterPopularPostsIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'Recent Comments',
            'route' => RouteNameEnum::MetaFilterRecentCommentsIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'My MeFi',
            'route' => RouteNameEnum::MetaFilterMyMeFiIndex,
            'authorization_required' => true,
        ],
        [
            'name' => 'My Favorites',
            'route' => RouteNameEnum::MetaFilterMyFavoritesIndex,
            'authorization_required' => true,
        ],
        [
            'name' => 'My Comments',
            'route' => RouteNameEnum::MetaFilterMyCommentsIndex,
            'authorization_required' => true,
        ],
    ],
    SubsiteEnum::MetaTalk->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::MetaTalkPostIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'Popular Posts',
            'route' => RouteNameEnum::MetaTalkPopularPostsIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'Recent Comments',
            'route' => RouteNameEnum::MetaTalkRecentCommentsIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'My Favorites',
            'route' => RouteNameEnum::MetaTalkMyFavoritesIndex,
            'authorization_required' => true,
        ],
    ],
    SubsiteEnum::Music->value => [
        [
            'name' => 'Songs',
            'route' => RouteNameEnum::MusicPostIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'Talk',
            'route' => RouteNameEnum::MusicTalkIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'Charts',
            'route' => RouteNameEnum::MusicChartsIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'Challenges',
            'route' => RouteNameEnum::MusicChallengesIndex,
            'authorization_required' => false,
        ],
    ],
    SubsiteEnum::Podcast->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::PodcastPostIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'Best of the Web',
            'route' => RouteNameEnum::PodcastBestOfTheWebIndex,
            'authorization_required' => false,
        ],
        [
            'name' => 'Out of the Blue',
            'route' => RouteNameEnum::PodcastOutOfTheBlueIndex,
            'authorization_required' => false,
        ],
    ],
];
