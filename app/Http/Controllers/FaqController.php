<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Contracts\View\View;

final class FaqController extends BaseController
{
    public function index(): View
    {
        return view('faqs.index', [
            'title' => 'FAQs',
        ]);
    }

    public function show(Faq $faq): View
    {
        return view('faqs.show', [
            'title' => $faq->question,
        ]);
    }
}
