<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Post;
use App\Models\Subsite;
use App\Models\User;
use App\Traits\UrlTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

final class PostFactory extends Factory
{
    use UrlTrait;

    protected $model = Post::class;

    public function definition(): array
    {
        $url = $this->faker->url();

        return [
            'title' => $this->faker->sentence(),
            'url' => str_replace(search: 'http://', replace: 'https://', subject: $url),
            'body' => $this->faker->paragraph(),
            'subsite_id' => Subsite::inRandomOrder()->first(),
            'user_id' => User::inRandomOrder()->first(),
            'created_at' => $this->faker->dateTimeThisYear(),
        ];
    }

    public function moreInside(): PostFactory
    {
        return $this->state(fn(array $attributes) => [
            'more_inside' => $this->faker->paragraph(),
        ]);
    }
}
