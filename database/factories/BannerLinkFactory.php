<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\BannerLink;
use App\Traits\FactoryTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

final class BannerLinkFactory extends Factory
{
    use FactoryTrait;

    protected $model = BannerLink::class;

    public function definition(): array
    {
        return [
            'sort_order' => $this->faker->numberBetween(1, 3),
            'title' => $this->faker->words(3, true),
            'url' => $this->faker->url(),
            'created_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
