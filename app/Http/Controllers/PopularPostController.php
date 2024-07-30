<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\PostRepositoryInterface;
use App\Services\PostService;
use Illuminate\Contracts\View\View;

final class PopularPostController extends BaseController
{
    public function __construct(
        protected PostRepositoryInterface $postRepository,
        protected PostService $postService,
    ) {
        parent::__construct();
    }

    public function index(): View
    {
        $posts = [];

        return view('posts.index', [
            'title' => 'Popular Posts',
            'posts' => $posts,
        ]);
    }
}
