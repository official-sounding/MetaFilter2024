<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

abstract class BaseFeatureTest extends TestCase
{
    public static function subdomainData(): array
    {
        return [
            "AskMetaFilter" => [
                'AskMetaFilter', // name
                'AskMetaFilter', // subdomain
            ],
            "FanFare" => [
                'FanFare', // name
                'fanfare', // subdomain
            ],
            "IRL" => [
                'IRL', // name
                'irl', // subdomain
            ],
            "MetaFilter" => [
                'MetaFilter', // name
                'metafilter', // subdomain
            ],
            "MetaTalk" => [
                'MetaTalk', // name
                'metatalk', // subdomain
            ],
            "Music" => [
                'Music', // name
                'music', // subdomain
            ],
            "Podcast" => [
                'Podcast', // name
                'podcast', // subdomain
            ],
            "Projects" => [
                'Projects', // name
                'projects', // subdomain
            ],
        ];
    }
}
