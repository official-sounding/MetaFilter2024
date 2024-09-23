<?php

namespace Database\Factories;

use App\Models\FlagReason;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlagReasonFactory extends Factory
{
    protected $model = FlagReason::class;

    public function definition(): array
    {
        return [
            'reason' => $this->faker->word,
        ];
    }
}
