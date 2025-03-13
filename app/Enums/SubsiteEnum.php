<?php

declare(strict_types=1);

namespace App\Enums;

use Exception;

enum SubsiteEnum: string
{
    case Ask = 'ask';
    case BestOf = 'bestof';
    case Chat = 'chat';
    case FanFare = 'fanfare';
    case Irl = 'irl';
    case Jobs = 'jobs';
    case Labs = 'labs';
    case Mail = 'mail';
    case Mall = 'mall';
    case MetaFilter = 'www';
    case MetaTalk = 'metatalk';
    case Music = 'music';
    case Podcast = 'podcast';
    case Projects = 'projects';

    /**
     * @throws Exception
     */
    public function route(): string
    {
        return match ($this) {
            self::Ask => 'ask.posts.index',
            self::BestOf => 'bestof.posts.index',
            self::Chat => 'chat.home.index',
            self::FanFare => 'fanfare.posts.index',
            self::Irl => 'irl.posts.index',
            self::Jobs => 'jobs.posts.index',
            self::Labs => 'labs.home.index',
            self::Mall => 'mall.home.index',
            self::MetaFilter => 'metafilter.posts.index',
            self::MetaTalk => 'metatalk.posts.index',
            self::Music => 'music.posts.index',
            self::Podcast => 'podcast.posts.index',
            self::Projects => 'projects.posts.index',
            self::Mail => throw new Exception('To be implemented'),
        };
    }

    /**
     * @throws Exception
     */
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
            self::Mail => throw new Exception('To be implemented'),
        };
    }
}
