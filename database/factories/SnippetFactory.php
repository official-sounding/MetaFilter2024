<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Snippet;
use Illuminate\Database\Eloquent\Factories\Factory;

final class SnippetFactory extends Factory
{
    protected $model = Snippet::class;

    private const int NUMBER_OF_WORDS = 3;
    private const int NUMBER_OF_PARAGRAPHS = 2;

    public function definition(): array
    {
        return [
            'title' => $this->faker->words(self::NUMBER_OF_WORDS, true),
            'body' => $this->faker->paragraphs(self::NUMBER_OF_PARAGRAPHS, true),
        ];
    }
}
