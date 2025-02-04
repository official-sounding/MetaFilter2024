<?php

declare(strict_types=1);

namespace App\Http\Controllers\Ask;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

final class UnansweredQuestionsController extends BaseController
{
    public function index(): View
    {
        return view('ask.unanswered-questions.index', [
            'title' => trans('Unanswered Questions'),
        ]);
    }
}
