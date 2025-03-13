<?php

declare(strict_types=1);

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\BaseController;
use App\Models\Post;
use App\Repositories\FlagReasonRepositoryInterface;
use App\Repositories\PostRepositoryInterface;
use App\Services\LdJsonService;
use App\Services\PostService;
use App\Traits\PostTrait;
use App\Traits\SubsiteTrait;
use Illuminate\Contracts\View\View;

final class PostController extends BaseController
{
    use PostTrait;
    use SubsiteTrait;

    public array $flagReasons;

    public function __construct(
        protected FlagReasonRepositoryInterface $flagReasonRepository,
        protected LdJsonService $ldJsonService,
        protected PostRepositoryInterface $postRepository,
        protected PostService $postService,
    ) {
        parent::__construct();
    }

    public function index(): View
    {
        return view('posts.index', [
            'title' => trans('Posts'),
            'showSecondaryNavigation' => true,
        ]);
    }

    public function show(Post $post): View
    {
        $this->flagReasons = $this->flagReasonRepository->getDropdownValues(column: 'reason');

        $relatedPosts = $this->postRepository->getRelatedPosts($post);

        $subdomain = $this->getSubdomain() === 'www' ? 'metafilter' : $this->getSubdomain();

        return view('posts.show', [
            'title' => $post->title,
            'post' => $post,
            'user' => $post->user(),
            'next' => $post->next(),
            'previous' => $post->previous(),
            'flagReasons' => $this->flagReasons,
            'isArchived' => $this->isArchived($post),
            'canonicalUrl' => $this->getCanonicalUrl($post),
            'relatedPosts' => $relatedPosts,
            'subdomain' => $subdomain,
            'useLivewire' => true,
            'useWysiwyg' => true,
        ]);
    }
}
