<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Contact;
use App\Traits\FactoryTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

final class ContactFactory extends Factory
{
    use FactoryTrait;

    protected $model = Contact::class;

    public function definition(): array
    {
        return [
            //
        ];
    }
}
