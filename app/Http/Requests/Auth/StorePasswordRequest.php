<?php

declare(strict_types=1);

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Validation\Rules\Password;

final class StorePasswordRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            [
                'password' => [
                    'required',
                    'confirmed',
                    Password::defaults(),
                ],
            ],
        ];
    }
}
