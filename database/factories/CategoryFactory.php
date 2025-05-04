<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Category;
use App\Traits\FactoryTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

final class CategoryFactory extends Factory
{
    use FactoryTrait;

    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'category' => $this->faker->words(),
            'subsite_id' => $this->getRandomSubsiteId(),
        ];
    }
}
