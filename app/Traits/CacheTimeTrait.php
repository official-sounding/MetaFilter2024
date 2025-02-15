<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Support\Carbon;

trait CacheTimeTrait
{
    public function oneHour(): Carbon
    {
        return now()->addHour();
    }

    public function oneDay(): Carbon
    {
        return now()->addDay();
    }

    public function days(int $days): Carbon
    {
        return now()->addDays($days);
    }

    public function oneWeek(): Carbon
    {
        return now()->addWeek();
    }

    public function oneMonth(): Carbon
    {
        return now()->addMonth();
    }
}
