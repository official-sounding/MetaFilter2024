<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enums\RouteNameEnum;
use App\Repositories\PostRepositoryInterface;
use Illuminate\Http\RedirectResponse;

final class RandomPostController extends BaseController
{
    public function __construct(
        protected PostRepositoryInterface $postRepository,
    ) {
        parent::__construct();
    }

    public function show(): RedirectResponse
    {
        $post = $this->postRepository->getRandomPost();

        return redirect()->route(RouteNameEnum::POST_SHOW->value);
    }
}
