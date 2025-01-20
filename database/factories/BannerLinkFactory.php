<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\BannerLink;
use Illuminate\Database\Eloquent\Factories\Factory;

final class BannerLinkFactory extends Factory
{
    protected $model = BannerLink::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->words(3, true),
            'url' => $this->faker->url(),
            'created_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
