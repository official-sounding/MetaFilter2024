<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Snippet;
use Illuminate\Database\Eloquent\Factories\Factory;

final class SnippetFactory extends Factory
{
    protected $model = Snippet::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->words(3, true),
            'contents' => $this->faker->paragraphs(2, true),
        ];
    }
}
