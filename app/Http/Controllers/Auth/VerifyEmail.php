<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

final class VerifyEmail extends Controller
{
    public function show(): View
    {
        return view('auth.verify-email');
    }
}
