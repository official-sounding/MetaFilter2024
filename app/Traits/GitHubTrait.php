<?php

declare(strict_types=1);

namespace App\Traits;

trait GitHubTrait
{
    public function getEndpointPath(string $endpoint): string
    {
        $owner = $this->getOwner();
        $repository = $this->getRepository();

        return "/repos/$owner/$repository/$endpoint";
    }

    private function getApiVersion(): string
    {
        return config('services.github.username');
    }

    private function getOwner(): string
    {
        return config('services.github.username');
    }

    public function getRepository(): string
    {
        return config('services.github.repository');
    }
}
