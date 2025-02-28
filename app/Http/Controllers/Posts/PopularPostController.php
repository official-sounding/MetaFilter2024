<?php

declare(strict_types=1);

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\BaseController;
use App\Traits\PopularPostTrait;
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
        $datePosts = [];

        return view('posts.index', [
            'title' => $this->getTitle(),
            'showTitle' => true,
            'datePosts' => $datePosts,
            'showSecondaryNavigation' => true,
        ]);
    }
}
