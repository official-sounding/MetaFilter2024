<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\PageRepositoryInterface;
use Illuminate\Contracts\View\View;

final class PageController extends BaseController
{
    public function __construct(protected PageRepositoryInterface $pageRepository)
    {
        parent::__construct();
    }
    public function show(): View
    {
        $slug = request()->segment(1);

        $page = $this->pageRepository->getBySlug($slug);

        return view('pages.show', [
            'page' => $page,
            'title' => $page->title,
        ]);
    }
}
