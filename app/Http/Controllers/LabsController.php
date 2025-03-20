<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\PageRepositoryInterface;
use Illuminate\Contracts\View\View;

final class LabsController extends BaseController
{
    public function __construct(protected PageRepositoryInterface $pageRepository)
    {
        parent::__construct();
    }

    public function index(): View
    {
        $page = $this->pageRepository->getBySlug('labs');

        return view('labs.index', [
            'title' => $page->title,
            'page' => $page,
        ]);
    }
}
