<?php

declare(strict_types=1);

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\BaseController;
use App\Models\Post;
use App\Repositories\PostRepositoryInterface;
use App\Services\PostService;
use App\Traits\PostTrait;
use Illuminate\Contracts\View\View;

final class MyPostController extends BaseController
{
    use PostTrait;

    public function __construct(
        protected PostRepositoryInterface $postRepository,
        protected PostService $postService,
    ) {
        parent::__construct();
    }

    public function index(): View
    {
        return view('my-posts.index', [
            'title' => trans('My Draft Posts'),
            'posts' => $this->postRepository->getDraftPosts(),
        ]);
    }

    public function show(Post $post): View
    {
        return view('posts.show', [
            'title' => $this->getPreviewPostText(),
            'post' => $post,
        ]);
    }
}
