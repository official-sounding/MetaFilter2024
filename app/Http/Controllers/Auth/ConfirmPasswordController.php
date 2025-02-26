<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

final class ConfirmPasswordController extends Controller
{
    public function create(): View
    {
        return view('auth.confirm-password');
    }
}
