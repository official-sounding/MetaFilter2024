<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\SimplePageRepositoryInterface;
use Illuminate\Contracts\View\View;

final class ChatController extends BaseController
{
    public function __construct(protected SimplePageRepositoryInterface $pageRepository)
    {
        parent::__construct();
    }

    public function index(): View
    {
        $page = $this->pageRepository->getBySlug('chat');

        return view('chat.index', [
            'title' => $page->title,
            'page' => $page,
        ]);
    }
}
