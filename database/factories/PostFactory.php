<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\PostStateEnum;
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
        $timestamp = $this->faker->dateTimeBetween('-20 years')->format('Y-m-d H:i:s');
        $timestamp = date('Y-m-d H:i:s', strtotime($timestamp));

        return [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'more_inside' => $this->faker->paragraphs(3, true),
            'subsite_id' => (new Subsite())->inRandomOrder()->first(),
            'user_id' => (new User())->inRandomOrder()->first(),
            'created_at' => $timestamp,
            'published_at' => $timestamp,
            'updated_at' => null,
            'deleted_at' => null,
            'is_published' => true,
            'state' => PostStateEnum::Published->value,
        ];
    }

    public function moreInside(): PostFactory
    {
        return $this->state(fn(array $attributes) => [
            'more_inside' => $this->faker->paragraph(),
        ]);
    }

    public function legacyId(): PostFactory
    {
        return $this->state(fn(array $attributes) => [
            'legacy_id' => $this->faker->randomDigitNotNull
        ]);
    }

    public function linkTextAndUrl(): PostFactory
    {
        $url = $this->faker->url();

        return $this->state(fn(array $attributes) => [
            'link_text' => $this->faker->sentence(),
            'link_url' => $this->useSecureProtocol($url),
        ]);
    }
}
