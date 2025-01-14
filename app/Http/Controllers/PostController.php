<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreMetaFilterPostRequest;
use App\Http\Requests\Post\UpdateMetaFilterPostRequest;
use App\Models\Post;
use App\Repositories\FlagReasonRepositoryInterface;
use App\Repositories\PostRepositoryInterface;
use App\Services\LdJsonService;
use App\Services\PostService;
use App\Traits\PostTrait;
use Illuminate\Contracts\View\View;

final class PostController extends BaseController
{
    use PostTrait;

    public array $flagReasons;

    public function __construct(
        protected FlagReasonRepositoryInterface $flagReasonRepository,
        protected LdJsonService $ldJsonService,
        protected PostRepositoryInterface $postRepository,
        protected PostService $postService,
    ) {
        parent::__construct();
    }

    public function index(int $page = 1): View
    {
        $datePosts = $this->postRepository->getBySubdomain($page);

        return view('posts.index', [
            'title' => 'Posts',
            'datePosts' => $datePosts,
            'showSecondaryNavigation' => true,
        ]);
    }

    public function show(Post $post): View
    {
        $this->flagReasons = $this->flagReasonRepository->getDropdownValues('reason');

        return view('posts.show', [
            'title' => $post->title,
            'post' => $post,
            'next' => $post->next(),
            'previous' => $post->previous(),
            'useWysiwyg' => true,
            'flagReasons' => $this->flagReasons,
            'isArchived' => $this->isArchived($post),
            'canonicalUrl' => $this->getCanonicalUrl($post),
        ]);
    }

    public function create(): View
    {
        return view('posts.create', [
            'title' => $this->getNewPostText(),
        ]);
    }

    public function store(StoreMetaFilterPostRequest $request)
    {
        $post = $this->postService->store($request->validated());
    }

    public function edit(Post $post): View
    {
        return view('posts.edit', [
            'title' => 'Edit Post',
            'post' => compact($post),
        ]);
    }

    public function update(UpdateMetaFilterPostRequest $request, Post $post)
    {
        $updated = $this->postService->update($request->validated());
    }

    public function delete(Post $post)
    {
        $deleted = $this->postService->delete($post);
    }
}
