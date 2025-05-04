<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\MeFiMail;
use App\Traits\FactoryTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

final class MeFiMailFactory extends Factory
{
    use FactoryTrait;

    protected $model = MeFiMail::class;

    public function definition(): array
    {
        return [
            'subject' => $this->faker->sentence(),
            'message' => $this->faker->paragraph(),
            'sender_id' => $this->getRandomUserId(),
            'recipient_id' => $this->getRandomUserId(),
        ];
    }
}
