<?php

declare(strict_types=1);

namespace App\Enums;

enum SubsiteEnum: string
{
    case ASK = 'ask';
    case BEST_OF = 'bestof';
    case CHAT = 'chat';
    case FANFARE = 'fanfare';
    case IRL = 'irl';
    case JOBS = 'jobs';
    case LABS = 'labs';
    case MALL = 'mall';
    case METAFILTER = 'www';
    case METATALK = 'metatalk';
    case MUSIC = 'music';
    case PODCAST = 'podcast';
    case PROJECTS = 'projects';

    public function route(): string
    {
        return match ($this) {
            self::METAFILTER => RouteNameEnum::METAFILTER_POST_INDEX->value,
            self::ASK => RouteNameEnum::ASK_POST_INDEX->value,
            self::FANFARE => RouteNameEnum::FANFARE_POST_INDEX->value,
            self::PROJECTS => RouteNameEnum::PROJECTS_POST_INDEX->value,
            self::MUSIC => RouteNameEnum::MUSIC_POST_INDEX->value,
            self::JOBS => RouteNameEnum::JOBS_POST_INDEX->value,
            self::IRL => RouteNameEnum::IRL_POST_INDEX->value,
            self::METATALK => RouteNameEnum::METATALK_POST_INDEX->value,
            self::PODCAST => RouteNameEnum::PODCAST_POST_INDEX->value,
            self::CHAT => RouteNameEnum::CHAT_HOME_INDEX->value,
            self::LABS => RouteNameEnum::LABS_HOME_INDEX->value,
            self::MALL => RouteNameEnum::MALL_HOME_INDEX->value,
            self::BEST_OF => RouteNameEnum::BEST_OF_HOME_INDEX->value,
        };
    }

    public function title(): string
    {
        return match ($this) {
            self::METAFILTER => 'MetaFilter',
            self::ASK => 'AskMeFi',
            self::FANFARE => 'FanFare',
            self::PROJECTS => 'Projects',
            self::MUSIC => 'Music',
            self::JOBS => 'Jobs',
            self::IRL => 'IRL',
            self::METATALK => 'MetaTalk',
            self::PODCAST => 'Podcast',
            self::CHAT => 'Chat',
            self::LABS => 'Labs',
            self::MALL => 'Mall',
            self::BEST_OF => 'Best Of',
        };
    }

}
