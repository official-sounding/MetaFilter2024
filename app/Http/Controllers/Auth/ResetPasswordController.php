<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

final class ResetPasswordController extends Controller
{
    public function show(): View
    {
        return view('auth.reset-password');
    }
}
