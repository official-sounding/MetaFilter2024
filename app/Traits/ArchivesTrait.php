<?php

declare(strict_types=1);

namespace App\Traits;

trait ArchivesTrait
{
    use DateTrait;

    public function getTitle(int $year = null, int $month = null, int $day = null): string
    {
        if (is_null($year) && is_null($month) && is_null($day)) {
            return 'Archives';
        }

        $formattedDate = $this->getFormattedDate($year, $month, $day);

        if ($month && $day) {
            return "Archives for $formattedDate";
        }

        if ($month) {
            return "Archives for $formattedDate";
        }

        return $year . ' Archives';
    }
}
