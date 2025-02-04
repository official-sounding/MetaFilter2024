<?php

declare(strict_types=1);

namespace App\Http\Controllers\Ask;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

final class PopularQuestionsController extends BaseController
{
    public function index(): View
    {
        return view('ask.popular-questions.index', [
            'title' => trans('Popular Questions'),
        ]);
    }
}
