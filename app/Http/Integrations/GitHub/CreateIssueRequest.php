<?php

declare(strict_types=1);

namespace App\Http\Integrations\GitHub;

use App\Traits\GitHubTrait;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

final class CreateIssueRequest extends Request implements HasBody
{
    use GitHubTrait;
    use HasJsonBody;

    protected Method $method = Method::POST;

    private const array LABELS = [
        'bug'
    ];

    public function __construct(
        protected string $title,
        protected string $issueBody,
    ){}

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
            'title' => $this->title,
            'body' => $this->issueBody,
            'labels' => self::LABELS,
            'headers' => [
                'X-GitHub-Api-Version' => $apiVersion
            ],
        ];
    }
}
