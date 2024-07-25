<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Post;
use App\Repositories\PostRepositoryInterface;
use App\Services\PostService;
use Illuminate\Contracts\View\View;

final class PostController extends BaseController
{
    public function __construct(
        protected PostRepositoryInterface $postRepository,
        protected PostService $postService,
    ) {
        parent::__construct();
    }

    public function index(): View
    {
        $posts = $this->postRepository->getBySubdomain();

        return view('posts.index', [
            'title' => 'Posts',
            'posts' => $posts,
        ]);
    }

    public function show(Post $post): View
    {
        return view('posts.show', [
            'title' => $post->title,
            'post' => $post,
            'next' => $post->next(),
            'previous' => $post->previous(),
        ]);
    }

    public function create(): View
    {
        return view('posts.create', [
            'title' => 'Create Post',
        ]);
    }

    public function store(StorePostRequest $request)
    {
        $stored = $this->postService->store($request->validated());
    }

    public function edit(Post $post): View
    {
        return view('posts.edit', [
            'title' => 'Edit Post',
            'post' => compact($post),
        ]);
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $updated = $this->postService->update($post, $request->validated());
    }

    public function delete(Post $post)
    {
        $deleted = $this->postService->delete($post);
    }
}
