<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Passkey;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

final class PasskeyFactory extends Factory
{
    protected $model = Passkey::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'text' => $this->faker->word(),
            'credential_id' => Str::random(),
            'data' => [],
        ];
    }
}
