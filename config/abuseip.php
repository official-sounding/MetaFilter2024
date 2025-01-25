<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | ABUSE_IP Source URL
    |--------------------------------------------------------------------------
    |
    | The source URLs yielding a list of disposable email domains. Change these
    | to whatever source you like. Just make sure they all return a JSON array.
    |
    | A sensible default is provided using jsDelivr's services. jsDelivr is
    | a free service, so there are no uptime or support guarantees.
    |
    */
    'source' => [
        'https://raw.githubusercontent.com/borestad/blocklist-abuseipdb/master/abuseipdb-s100-all.ipv4',
    ],

    'abuse_ips' => [],

    'storage' => storage_path('framework/abuseip.json'),
];
