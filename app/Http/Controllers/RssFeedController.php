<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Post;
use App\Repositories\PostRepositoryInterface;
use Illuminate\Http\Response;

final class RssFeedController extends BaseController
{
    public function __construct(
        protected PostRepositoryInterface $postRepository,
    ) {
        parent::__construct();
    }

    public function show(): Response
    {
        $posts = Post::latest()->get();

        return response()->view('rss.show', [
            'posts' => $posts,
        ])->header(
            key: 'Content-Type',
            values: 'text/xml',
        );
    }
}
