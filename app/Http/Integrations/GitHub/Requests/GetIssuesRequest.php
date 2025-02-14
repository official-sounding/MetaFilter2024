<?php

declare(strict_types=1);

namespace App\Http\Integrations\GitHub\Requests;

use App\Http\Integrations\GitHub\GitHubConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;

final class GetIssuesRequest extends Request
{
    protected ?string $connector = GitHubConnector::class;

    protected Method $method = Method::GET;

    public function __construct(
        public string $owner,
        public string $repo,
    ) {}

    public function resolveEndpoint(): string
    {
        // TODO: Implement resolveEndpoint() method.
    }
}
