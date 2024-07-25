<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Contracts\View\View;

final class ArchivesController extends BaseController
{
    public function __construct(
        protected PostService $postService,
    ) {
        parent::__construct();
    }

    public function index(): ?View
    {
        return view('posts.index', [
            'title' => 'Archives',
            'posts' => [],
        ]);
    }
}
