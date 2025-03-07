<?php

declare(strict_types=1);

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\BaseController;
use App\Repositories\PostRepositoryInterface;
use App\Traits\SubsiteTrait;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

final class RandomPostController extends BaseController
{
    use SubsiteTrait;

    public function __construct(
        protected PostRepositoryInterface $postRepository,
    ) {
        parent::__construct();
    }

    public function show(): RedirectResponse|Response
    {
        $post = $this->postRepository->getRandomPost();

        if ($post === null) {
            return response()->view(view: 'errors.404', status: Response::HTTP_NOT_FOUND);
        }

        $route = $post->url()->show();

        return redirect()->route($route);
    }
}
