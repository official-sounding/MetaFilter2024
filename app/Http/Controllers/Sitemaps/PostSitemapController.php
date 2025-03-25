<?php

declare(strict_types=1);

namespace App\Http\Controllers\Sitemaps;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Response;

final class PostSitemapController extends Controller
{
    public function index(): Response
    {
        $alphas = range(start: 'a', end: 'z');

        return response()->view('sitemap.posts.index', [
            'alphas' => $alphas,
        ])->header(key: 'Content-Type', values: 'text/xml');
    }

    public function show($letter)
    {
        $posts = Post::where(column: 'title', operator: 'LIKE', value: "$letter%")
            ->whereNotNull(columns: 'published_at')
            ->get();

        return response()->view('sitemap.posts.show', [
            'posts' => $posts,
        ])->header(key: 'Content-Type', values: 'text/xml');
    }
}
