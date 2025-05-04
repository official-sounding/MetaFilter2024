<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Subsite;
use App\Traits\FactoryTrait;

final class SubsiteFactory extends BaseFactory
{
    use FactoryTrait;

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
            'created_at' => $timestamp,
            'updated_at' => null,
        ];
    }
}
