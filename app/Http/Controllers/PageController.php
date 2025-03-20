<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\PageRepository;
use App\Traits\SubsiteTrait;
use App\Traits\UrlTrait;
use Illuminate\Contracts\View\View;

final class PageController extends BaseController
{
    use SubsiteTrait;
    use UrlTrait;

    public function __construct(protected PageRepository $simplePageRepository)
    {
        parent::__construct();
    }

    public function show(): View
    {
        $slug = $this->getUrlSegment(1);

        $page = $this->simplePageRepository->getBySlug($slug);

        return view('pages.show', [
            'page' => $page,
            'title' => $page->title,
        ]);
    }
}
