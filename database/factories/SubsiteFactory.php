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
            'name' => $this->faker->word(),
            'nickname' => $this->faker->word(),
            'tagline' => $this->faker->sentence(),
            'subdomain' => $this->faker->word(),
            'green_text' => 'Meta',
            'white_text' => 'Filter',
            'slug' => $this->faker->unique()->slug(),
            'route' => $this->faker->word(),
            'view' => $this->faker->word(),
            'created_at' => $timestamp,
            'updated_at' => null,
        ];
    }
}
