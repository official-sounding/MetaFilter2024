<?php

declare(strict_types=1);

namespace App\Services;

use Spatie\Valuestore\Valuestore;

final class SettingService
{
    public function __construct(protected Valuestore $settings) {}

    public function get(string $key, $default = null): mixed
    {
        return $this->settings->get($key, $default);
    }

    public function store(string $key, mixed $value): Valuestore
    {
        return $this->settings->put($key, $value);
    }

    public function delete(string $key): Valuestore
    {
        return $this->settings->forget($key);
    }
}
