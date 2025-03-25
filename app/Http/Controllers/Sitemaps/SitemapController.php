<?php

declare(strict_types=1);

namespace App\Http\Controllers\Sitemaps;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $post = Post::orderBy('updated_at', 'desc')
            ->whereNotNull(columns: 'published_at')
            ->first();

        return response()->view('sitemap.index', [
            'post' => $post,
        ])->header(key: 'Content-Type', values: 'text/xml');
    }
}
