<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Traits\FactoryTrait;
use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\Tags\Tag;

final class TagFactory extends Factory
{
    use FactoryTrait;

    protected $model = Tag::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'created_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
