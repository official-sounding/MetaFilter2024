<?php

declare(strict_types=1);

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\BaseController;
use App\Traits\ArchivesTrait;
use Illuminate\Contracts\View\View;

final class ArchivesController extends BaseController
{
    use ArchivesTrait;

    public function index(?int $year = null, ?int $month = null, ?int $day = null): View
    {
        $posts = $this->getPosts($year, $month, $day);
        $title = $this->getTitle($year, $month, $day);
        $view = $this->getView($year, $month, $day);

        return view("archives.$view", [
            'title' => $title,
            'posts' => $posts,
        ]);
    }
}
