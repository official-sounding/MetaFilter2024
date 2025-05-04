<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Passkey;
use App\Traits\FactoryTrait;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

final class PasskeyFactory extends Factory
{
    use FactoryTrait;

    protected $model = Passkey::class;

    public function definition(): array
    {
        return [
            'user_id' => $this->getRandomUserId(),
            'text' => $this->faker->word(),
            'credential_id' => Str::random(),
            'data' => [],
        ];
    }
}
