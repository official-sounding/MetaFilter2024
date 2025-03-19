<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Traits\DateAndTimeTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

abstract class BaseFactory extends Factory
{
    use DateAndTimeTrait;

    protected string $host;

    public function __construct()
    {
        parent::__construct();

        $this->host = config('app.host');
    }

    public function getFakeTimestamp(): string
    {
        $timestamp = $this->faker->dateTimeBetween('-20 years')->format('Y-m-d H:i:s');

        return date('Y-m-d H:i:s', strtotime($timestamp));
    }
}
