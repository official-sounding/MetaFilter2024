<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Page;
use App\Traits\PunctuationTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

final class PageFactory extends Factory
{
    use PunctuationTrait;

    protected $model = Page::class;

    public function definition(): array
    {
        $title = $this->faker->words();

        return [
            'title' => $title,
            'slug' => $this->getSlug($title),
            'body' => $this->faker->paragraphs(3, true),
        ];
    }
}
