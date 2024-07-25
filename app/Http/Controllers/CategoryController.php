<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\CategoryRepositoryInterface;
use Illuminate\Contracts\View\View;

final class CategoryController extends BaseController
{
    public function __construct(
        protected CategoryRepositoryInterface $categoryRepository,
    ) {
        parent::__construct();
    }

    public function index(): View
    {
        return view('categories.index', [
            'categories' => Category::all(),
        ]);
    }

    public function show(Category $category): View
    {
        return view('categories.show', [
            'category' => $category,
        ]);
    }
}
