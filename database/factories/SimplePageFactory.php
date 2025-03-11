<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\SimplePage;
use App\Traits\StringFormattingTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

final class SimplePageFactory extends Factory
{
    use StringFormattingTrait;

    protected $model = SimplePage::class;

    private const int NUMBER_OF_PARAGRAPHS = 3;

    public function definition(): array
    {
        $title = $this->faker->words();

        return [
            'title' => $title,
            'slug' => $this->getSlug($title),
            'body' => $this->faker->paragraphs(self::NUMBER_OF_PARAGRAPHS, true),
        ];
    }
}
