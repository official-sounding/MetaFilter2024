<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Idea;
use App\Traits\FactoryTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

final class IdeaFactory extends Factory
{
    use FactoryTrait;

    protected $model = Idea::class;

    public function definition(): array
    {
        return [

        ];
    }
}
