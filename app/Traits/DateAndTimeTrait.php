<?php

declare(strict_types=1);

namespace App\Traits;

use Carbon\Carbon;

trait DateAndTimeTrait
{
    public function getCurrentDateTimeString(string $unitPrecision = 'second'): string
    {
        return Carbon::now()->toDateTimeString($unitPrecision);
    }

    public function getCurrentMonthNumber(): int
    {
        return Carbon::now()->month;
    }

    public function getCurrentYear(): int
    {
        return Carbon::now()->year;
    }

    public function getCurrentTimestamp(): string
    {
        return Carbon::now()->timestamp;
    }

    public function getFilenameTimestamp(): string
    {
        $datetime = Carbon::now();

        return $datetime->format('Y-m-d-h-mm-ss');
    }

    public function getDiffForHumans($datetime): string
    {
        $datetime = new Carbon($datetime);

        return $datetime->diffForHumans();
    }

    public function getFormattedDateTime($datetime, bool $showTime = false): string
    {
        $datetime = new Carbon($datetime);

        return $showTime === true ? $datetime->format('F j, Y @ g:i:s a') : $datetime->format('F j, Y');
    }

    public function getFormattedInsertDateTime($datetime): string
    {
        $datetime = new Carbon($datetime);

        return $datetime->format('Y-m-d h:m:s');
    }

    public function getMonthsForDropdown(bool $startWithCurrentMonth = false): array
    {
        $months = [];
        $year = Carbon::now()->format('Y');

        $startMonth = $startWithCurrentMonth === true ? $this->getCurrentMonthNumber() : 1;

        for ($i = $startMonth; $i <= 12; $i++) {
            $months[$i] = [
                'name' => Carbon::createFromDate((int) $year, $i)->format('F'),
                'value' => $i,
                'selected' => $this->isCurrentMonth($i),
            ];
        }

        return $months;
    }

    private function isCurrentMonth(int $month): bool
    {
        $currentMonth = (int) Carbon::now()->format('m');

        return $currentMonth === $month;
    }

    public function getStartOfToday(): string
    {
        return Carbon::now()->startOfDay()->toDateTimeString();
    }
}
