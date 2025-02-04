<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\TagRepositoryInterface;
use Illuminate\Contracts\View\View;
use Spatie\Tags\Tag;

final class TagController extends BaseController
{
    public function __construct(
        protected TagRepositoryInterface $tagRepository,
    ) {
        parent::__construct();
    }

    public function index(): View
    {
        return view('tags.index', [
            'title' => trans('Tags'),
        ]);
    }

    public function show(Tag $tag): View
    {
        return view('tags.show', [
            'title' => $tag->name,
            'tag' => compact($tag),
        ]);
    }
}
