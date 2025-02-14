<?php

declare(strict_types=1);

namespace App\Http\Integrations\GitHub;

use App\Http\Integrations\ConnectorInterface;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;

final class GitHubConnector extends Connector implements ConnectorInterface
{
    use AcceptsJson;

    private const int TIMEOUT = 30;


    public function defineBaseUrl(): string
    {
        return (string) config('services.github_api.url');
    }

    public function defaultConfig(): array
    {
        return [
            'timeout' => self::TIMEOUT,
        ];
    }

    public function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
