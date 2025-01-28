<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\SimplePageRepositoryInterface;
use App\Traits\SubsiteTrait;
use Illuminate\Contracts\View\View;

final class PageController extends BaseController
{
    use SubsiteTrait;

    public function __construct(protected SimplePageRepositoryInterface $pageRepository)
    {
        parent::__construct();
    }

    public function show(): View
    {
        $slug = request()->segment(1);

        $subdomain = $this->getSubdomainFromUrl();

        if ($subdomain === 'labs') {
            $slug = 'labs';
        }

        if ($subdomain === 'mall') {
            $slug = 'mefi-mall';
        }

        $page = $this->pageRepository->getBySlug($slug);

        return view('pages.show', [
            'page' => $page,
            'title' => $page->title,
        ]);
    }

    public function about(): View
    {
        return $this->show();
    }
}
