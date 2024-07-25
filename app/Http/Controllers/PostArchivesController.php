<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\PostRepositoryInterface;
use Illuminate\Contracts\View\View;

final class PostArchivesController extends BaseController
{
    public function __construct(protected PostRepositoryInterface $postRepository)
    {
        parent::__construct();
    }

    public function index(): View
    {
        return view('archives.index', [
            'title' => 'Archives',
        ]);
    }

    public function show(): View
    {
        return view('archives.show', [
            'title' => 'Archives',
        ]);
    }
}
