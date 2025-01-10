<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\Post;
use Illuminate\Support\Collection;

trait ArchivesTrait
{
    use DateTrait;

    public function getPosts(int $year = null, int $month = null, int $day = null): ?Collection
    {
        if (is_null($year) || is_null($month) && is_null($day)) {
            return null;
        }

        $query = Post::select('*')
            ->whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', $month);

        if ($day) {
            $query = $query->whereDay('created_at', '=', $day);
        }

        return $query->get();
    }

    public function getTitle(int $year = null, int $month = null, int $day = null): string
    {
        if (is_null($year) && is_null($month) && is_null($day)) {
            return 'Archives';
        }

        $formattedDate = $this->getFormattedDate($year, $month, $day);

        if ($month && $day) {
            return "$formattedDate Archives";
        }

        if ($month) {
            return "$formattedDate Archives";
        }

        return "$year Archives";
    }

    public function getView(int $year = null, int $month = null, int $day = null): string
    {
        if ($year && $month && $day) {
            return 'index-day';
        }

        if ($year && $month) {
            return 'index-month';
        }

        if ($year) {
            return 'index-year';
        }

        return 'index';
    }
}
