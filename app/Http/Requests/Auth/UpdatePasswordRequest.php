<?php

declare(strict_types=1);

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Support\Facades\Hash;

final class UpdatePasswordRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(string $password): array
    {
        return [
            'password' => Hash::make($password),
        ];
    }
}
