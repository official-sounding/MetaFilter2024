<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreBugReportRequest;
use Illuminate\Contracts\View\View;

final class BugController extends Controller
{
    public function index(): View
    {
        return view('bugs.index', [
            'title' => trans('Bugs'),
        ]);
    }

    public function create(): View
    {
        return view('bugs.create', [
            'title' => trans('Report a Bug'),
        ]);
    }

    public function store(StoreBugReportRequest $request): void
    {
        //
    }
}
