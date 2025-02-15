<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

final class ResetPasswordController extends Controller
{
    public function show()
    {
        return view('auth.reset-password');
    }
}
