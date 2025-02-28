<?php

declare(strict_types=1);

namespace App\Traits;

use Carbon\Carbon;

trait DateTrait
{
    public function getFormattedDate(?int $year = null, ?int $month = null, ?int $day = null): ?string
    {
        $year = $year ?? date('Y');

        if ($month && $day) {
            $date = "$year-$month-$day";

            return Carbon::parse($date)->format('F j, Y');
        }

        if ($month) {
            $date = "$year-$month-01";

            return Carbon::parse($date)->format('F Y');
        }

        return null;
    }
}
