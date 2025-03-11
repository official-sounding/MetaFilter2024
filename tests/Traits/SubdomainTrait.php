<?php

declare(strict_types=1);

namespace Tests\Traits;

use Illuminate\Testing\TestResponse;

/**
 * A trait to test subdomains.
 */
trait SubdomainTrait
{
    /**
     * Define the subdomain for the request.
     */
    public function withSubdomain(string $subdomain): self
    {
        if (!app()->isProduction()) {
            $domain = $subdomain . '.metafilter.test';
            $this->app['config']->set('app.domain', $domain);
            $this->app['config']->set('app.url', 'http://' . $domain);

            // When testing, we utilize server variables to assert the correct subdomain is utilized
            // and modify config to avoid "application configuration" errors
            return $this->withHeader('HOST', $domain);
        }

        return $this;
    }

    /**
     * Make a GET request to specific subdomain.
     */
    protected function getToSubdomain(string $subdomain, string $uri): TestResponse
    {
        return $this->withSubdomain($subdomain)->get($uri);
    }

    /**
     * Make a POST request to specific subdomain.
     */
    protected function postToSubdomain(string $subdomain, string $uri, array $data = []): TestResponse
    {
        return $this->withSubdomain($subdomain)->post($uri, $data);
    }

    /**
     * Make a PUT request to specific subdomain.
     */
    protected function putToSubdomain(string $subdomain, string $uri, array $data = []): TestResponse
    {
        return $this->withSubdomain($subdomain)->put($uri, $data);
    }

    /**
     * Make a PATCH request to specific subdomain.
     */
    protected function patchToSubdomain(string $subdomain, string $uri, array $data = []): TestResponse
    {
        return $this->withSubdomain($subdomain)->patch($uri, $data);
    }

    /**
     * Make a DELETE request to specific subdomain.
     */
    protected function deleteFromSubdomain(string $subdomain, string $uri, array $data = []): TestResponse
    {
        return $this->withSubdomain($subdomain)->delete($uri, $data);
    }
}
