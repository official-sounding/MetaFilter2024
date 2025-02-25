<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Enums\SubsiteEnum;

return [
    SubsiteEnum::Ask->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::AskPostIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'Popular Questions',
            'route' => RouteNameEnum::AskPopularQuestionsIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'Answered',
            'route' => RouteNameEnum::AskAnsweredQuestionsIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'Unanswered',
            'route' => RouteNameEnum::AskUnansweredQuestionsIndex->value,
            'authorization_required' => false,
        ],
    ],
    SubsiteEnum::FanFare->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::FanfarePostIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'FanFare Talk',
            'route' => RouteNameEnum::FanFareTalkIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'Clubs',
            'route' => RouteNameEnum::FanFareClubsIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'Water Cooler',
            'route' => RouteNameEnum::FanFareWaterCoolerIndex->value,
            'authorization_required' => false,
        ],
    ],
    SubsiteEnum::Irl->value => [
        [
            'name' => 'Upcoming Events',
            'route' => RouteNameEnum::IrlPostIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'Past Events',
            'route' => RouteNameEnum::IrlPastEventsIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'Future Events',
            'route' => RouteNameEnum::IrlFutureEventsIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'Proposed Events',
            'route' => RouteNameEnum::IrlProposedEventsIndex->value,
            'authorization_required' => false,
        ],
    ],
    SubsiteEnum::MetaFilter->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'Popular Posts',
            'route' => RouteNameEnum::MetaFilterPopularPostsIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'Recent Comments',
            'route' => RouteNameEnum::MetaFilterRecentCommentsIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'My MeFi',
            'route' => RouteNameEnum::MetaFilterMyMeFiIndex->value,
            'authorization_required' => true,
        ],
        [
            'name' => 'My Favorites',
            'route' => RouteNameEnum::MetaFilterMyFavoritesIndex->value,
            'authorization_required' => true,
        ],
        [
            'name' => 'My Comments',
            'route' => RouteNameEnum::MetaFilterMyCommentsIndex->value,
            'authorization_required' => true,
        ],
    ],
    SubsiteEnum::MetaTalk->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::MetaTalkPostIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'Popular Posts',
            'route' => RouteNameEnum::MetaTalkPopularPostsIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'Recent Comments',
            'route' => RouteNameEnum::MetaTalkRecentCommentsIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'My Favorites',
            'route' => RouteNameEnum::MetaTalkMyFavoritesIndex->value,
            'authorization_required' => true,
        ],
    ],
    SubsiteEnum::Music->value => [
        [
            'name' => 'Songs',
            'route' => RouteNameEnum::MusicPostIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'Talk',
            'route' => RouteNameEnum::MusicTalkIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'Charts',
            'route' => RouteNameEnum::MusicChartsIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'Challenges',
            'route' => RouteNameEnum::MusicChallengesIndex->value,
            'authorization_required' => false,
        ],
    ],
    SubsiteEnum::Podcast->value => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::PodcastPostIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'Best of the Web',
            'route' => RouteNameEnum::PodcastBestOfTheWebIndex->value,
            'authorization_required' => false,
        ],
        [
            'name' => 'Out of the Blue',
            'route' => RouteNameEnum::PodcastOutOfTheBlueIndex->value,
            'authorization_required' => false,
        ],
    ],
];
