<?php

declare(strict_types=1);

namespace App\Enums;

enum SubsiteEnum: string
{
    case Ask = 'ask';
    case BestOf = 'bestof';
    case Chat = 'chat';
    case FanFare = 'fanfare';
    case Irl = 'irl';
    case Jobs = 'jobs';
    case Labs = 'labs';
    case Mall = 'mall';
    case MetaFilter = 'www';
    case MetaTalk = 'metatalk';
    case Music = 'music';
    case Podcast = 'podcast';
    case Projects = 'projects';

    public function route(): string
    {
        return match ($this) {
            self::Ask => RouteNameEnum::AskPostIndex->value,
            self::BestOf => RouteNameEnum::BestOfHomeIndex->value,
            self::Chat => RouteNameEnum::ChatHomeIndex->value,
            self::FanFare => RouteNameEnum::FanfarePostIndex->value,
            self::Irl => RouteNameEnum::IrlPostIndex->value,
            self::Jobs => RouteNameEnum::JobsPostIndex->value,
            self::Labs => RouteNameEnum::LabsHomeIndex->value,
            self::Mall => RouteNameEnum::MallHomeIndex->value,
            self::MetaFilter => RouteNameEnum::MetaFilterPostIndex->value,
            self::MetaTalk => RouteNameEnum::MetaTalkPostIndex->value,
            self::Music => RouteNameEnum::MusicPostIndex->value,
            self::Podcast => RouteNameEnum::PodcastPostIndex->value,
            self::Projects => RouteNameEnum::ProjectsPostIndex->value,
        };
    }

    public function title(): string
    {
        return match ($this) {
            self::Ask => 'AskMeFi',
            self::BestOf => 'Best Of',
            self::Chat => 'Chat',
            self::FanFare => 'FanFare',
            self::Irl => 'IRL',
            self::Jobs => 'Jobs',
            self::Labs => 'Labs',
            self::Mall => 'Mall',
            self::MetaFilter => 'MetaFilter',
            self::MetaTalk => 'MetaTalk',
            self::Music => 'Music',
            self::Podcast => 'Podcast',
            self::Projects => 'Projects',
        };
    }
}
