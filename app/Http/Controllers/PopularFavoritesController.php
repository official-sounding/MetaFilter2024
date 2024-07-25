<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\PostRepositoryInterface;
use App\Services\PostService;
use App\Traits\PostTrait;
use App\Traits\SubsiteTrait;
use App\Traits\UrlTrait;
use Illuminate\Contracts\View\View;

final class PopularFavoritesController extends BaseController
{
    use PostTrait;
    use SubsiteTrait;
    use UrlTrait;

    public function __construct(
        protected PostRepositoryInterface $postRepository,
        protected PostService $postService,
    ) {
        parent::__construct();
    }

    public function index(): View
    {
        $subsite = $this->getSubsiteMetadata();

        $urlSegment = $this->getUrlSegment(1);

        $subdomain = $subsite['subdomain'];

        $posts = $this->postService->index($subdomain, $urlSegment);

        return view('posts.index', [
            'title' => 'Popular Favorites',
            'posts' => $posts,
            'sidebarView' => 'sidebars.' . $subdomain,
            'subsite' => $subsite,
        ]);
    }
}
