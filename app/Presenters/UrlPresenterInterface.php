<?php

declare(strict_types=1);

namespace App\Presenters;

interface UrlPresenterInterface
{
    public function delete(): string;

    public function edit(): string;

    public function show(): string;

    public function update(): string;
}
