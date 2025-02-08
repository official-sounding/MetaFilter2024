<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\UserStateEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

final class UserFactory extends Factory
{
    protected $model = User::class;
    protected static ?string $password;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'username' => fake()->unique()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => null,
            'legacy_id' => fake()->unique()->randomNumber(9, true),
            'password' => self::$password ??= Hash::make('password'),
            'remember_token' => null,
            'state' => UserStateEnum::Active->value,
        ];
    }

    public function agreesToTerms(): UserFactory
    {
        return $this->state(fn(array $attributes) => [
            'agrees_to_terms' => true,
        ]);
    }

    public function remember(): UserFactory
    {
        return $this->state(fn(array $attributes) => [
            'remember_token' => Str::random(10),
        ]);
    }

    public function verifiedEmail(): UserFactory
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => now(),
        ]);
    }
}
