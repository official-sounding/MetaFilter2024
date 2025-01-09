<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Traits\PopularPostTrait;
use App\Repositories\PostRepositoryInterface;
use App\Services\PostService;
use App\Traits\UrlTrait;
use Illuminate\Contracts\View\View;

final class PopularPostController extends BaseController
{
    use PopularPostTrait;
    use UrlTrait;

    public function __construct(
        protected PostRepositoryInterface $postRepository,
        protected PostService $postService,
    ) {
        parent::__construct();
    }

    public function index(): View
    {
        $datePosts = $this->postRepository->getPopularPosts();
        $subdomain = $this->getSubdomainFromUrl();

        return view('posts.index', [
            'title' => $this->getTitle($subdomain),
            'showTitle' => true,
            'datePosts' => $datePosts,
        ]);
    }
}
