<?php

namespace Database\Factories;

use App\Traits\DateAndTimeTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

abstract class BaseFactory extends Factory
{
    use DateAndTimeTrait;

    public function getFakeTimestamp(): string
    {
        $timestamp = $this->faker->dateTimeBetween('-20 years')->format('Y-m-d H:i:s');

        return date('Y-m-d H:i:s', strtotime($timestamp));
    }
}
