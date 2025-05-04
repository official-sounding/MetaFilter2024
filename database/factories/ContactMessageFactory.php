<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\ContactMessage;
use App\Traits\FactoryTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

final class ContactMessageFactory extends Factory
{
    use FactoryTrait;

    protected $model = ContactMessage::class;

    public function definition(): array
    {
        return [
            'email' => $this->faker->safeEmail(),
            'subject' => $this->faker->sentence(),
            'message' => $this->faker->paragraph(),
        ];
    }
}
