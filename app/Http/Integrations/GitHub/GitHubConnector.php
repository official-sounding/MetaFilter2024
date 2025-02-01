<?php

declare(strict_types=1);

namespace App\Http\Integrations\GitHub;

use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;

final class GitHubConnector extends Connector
{
    use AcceptsJson;

    public function resolveBaseUrl(): string
    {
        return '';
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }
}
