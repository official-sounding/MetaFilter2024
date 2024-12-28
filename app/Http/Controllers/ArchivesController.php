<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\PostService;
use App\Traits\ArchivesTrait;
use Illuminate\Contracts\View\View;

final class ArchivesController extends BaseController
{
    use ArchivesTrait;

    public function __construct(
        protected PostService $postService,
    ) {
        parent::__construct();
    }

    public function index(int $year = null, int $month = null, int $day = null): ?View
    {
        return view('archives.index', [
            'title' => $this->getTitle($year, $month, $day),
            'posts' => [],
        ]);
    }
}
