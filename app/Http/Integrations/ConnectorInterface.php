<?php

declare(strict_types=1);

namespace App\Http\Integrations;

interface ConnectorInterface {
    public function defaultConfig(): array;

    public function defaultHeaders(): array;

    public function defineBaseUrl(): string;

    public function resolveBaseUrl(): string;
}
