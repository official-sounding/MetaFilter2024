<?php

declare(strict_types=1);

namespace App\Http\Integrations\GitHub;

use App\Traits\GitHubTrait;
use Saloon\Enums\Method;
use Saloon\Http\Request;

final class GetIssuesRequest extends Request
{
    use GitHubTrait;

    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return $this->getEndpointPath('issues');
    }

    protected function defaultBody(): array
    {
        $apiVersion = $this->getApiVersion();
        $owner = $this->getOwner();
        $repository = $this->getRepository();

        return [
            'owner' => $owner,
            'repo' => $repository,
            'headers' => [
                'X-GitHub-Api-Version' => $apiVersion,
            ],
        ];
    }
}
