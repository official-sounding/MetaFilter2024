<?php

declare(strict_types=1);

namespace App\Http\Controllers\Ask;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

final class AnsweredQuestionsController extends BaseController
{
    public function index(): View
    {
        return view('ask.answered-questions.index', [
            'title' => trans('Answered Questions'),
            'showSecondaryNavigation' => true,
        ]);
    }
}
