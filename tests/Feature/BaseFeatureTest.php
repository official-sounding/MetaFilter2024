<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

abstract class BaseFeatureTest extends TestCase
{
    public static function subdomainData(): array
    {
        return [
            [
                'AskMetaFilter', // name
                'ask', // subdomain
                0,
            ],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 3],
            [
                'ask',

            ],
            [
                'fanfare',
            ],
            [
                'irl',
            ],
            [
                'metafilter',
            ],
            [
                'metatalk',
            ],
            [
                'music',
            ],
            [
                'podcast',
            ],
            [
                'projects',
            ],
        ];
    }
}
/*
 *             '',
            'nickname',
            'tagline',
            'subdomain',
            'green_text' => 'Meta',
            'white_text' => 'Filter',

 */
