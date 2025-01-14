<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class SignupController extends BaseController
{
    protected string $defaultTitle;

    public function __construct()
    {
        parent::__construct();

        $this->defaultTitle = trans('Sign Up');
    }

    public function index(): View
    {
        return view('signup.index', [
            'title' => $this->defaultTitle,
        ]);
    }

    public function thanks(): View
    {
        return view('signup.thanks', [
            'title' => trans('Welcome to MetaFilter!'),
        ]);
    }

    public function wizard(): View
    {
        return view('signup.wizard', [
            'title' => $this->defaultTitle,
        ]);
    }
}
