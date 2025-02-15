<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

final class ConfirmPasswordController extends Controller
{
    public function show()
    {
        return view('auth.confirm-password');
    }
}
