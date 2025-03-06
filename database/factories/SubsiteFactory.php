<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Subsite;

final class SubsiteFactory extends BaseFactory
{
    protected $model = Subsite::class;

    public function definition(): array
    {
        $timestamp = $this->getFakeTimestamp();

        return [
            'name',
            'nickname',
            'tagline',
            'subdomain',
            'green_text' => 'Meta',
            'white_text' => 'Filter',
            'created_at' => $timestamp,
            'published_at' => $timestamp,
            'updated_at' => null,
        ];
    }
}
