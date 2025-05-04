<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\ContactType;
use App\Traits\FactoryTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

final class ContactTypeFactory extends Factory
{
    use FactoryTrait;

    protected $model = ContactType::class;

    public function definition(): array
    {
        return [
            //
        ];
    }
}
