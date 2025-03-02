<?php

declare(strict_types=1);

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
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

    public function create(): View
    {
        return view('my-posts.create', [
            'title' => $this->getNewPostText(),
        ]);
    }

    public function store(StorePostRequest $request): void {}

    public function edit(Post $post): View
    {
        return view('my-posts.edit', [
            'title' => $this->getEditPostText(),
            'post' => $post,
        ]);
    }

    public function update(UpdatePostRequest $request, Post $post): void
    {
        $this->postService->update($post->id, $request->validated());
    }

    public function delete(Post $post): void
    {
        $this->postService->delete($post->id);
    }
}
