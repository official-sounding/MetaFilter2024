<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Faq;
use App\Models\Subsite;
use App\Traits\PunctuationTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

final class FaqFactory extends Factory
{
    use PunctuationTrait;

    protected $model = Faq::class;

    public function definition(): array
    {
        $question = $this->faker->sentence();

        return [
            'question' => $question,
            'slug' => $this->getSlug($question),
            'answer' => $this->faker->paragraph(),
            'subsite_id' => Subsite::inRandomOrder()->first(),
        ];
    }
}
