<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */
    /*
    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],
*/
    'bluesky' => [
        'username' => env('BLUESKY_USERNAME'),
        'password' => env('BLUESKY_PASSWORD'),
    ],
    'github' => [
        'repository' => env('GITHUB_REPOSITORY_NAME'),
        'owner' => env('GITHUB_REPOSITORY_OWNER'),
        'username' => env('GITHUB_USERNAME'),
        'token' => env('GITHUB_TOKEN'),
        'api_version' => env('GITHUB_API_VERSION'),
    ],
    'github_api' => [
        'token' => env('GITHUB_TOKEN'),
        'url' => env('GITHUB_API_URL', 'https://api.github.com/'),
    ],
    'ipinfo' => [
        'access_token' => env('IPINFO_SECRET'),
    ],
    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],
];
