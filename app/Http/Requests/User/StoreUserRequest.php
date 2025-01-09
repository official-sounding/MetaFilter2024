<?php

declare(strict_types=1);

namespace App\Http\Requests\User;

use App\Http\Requests\BaseFormRequest;
use App\Models\User;
use Illuminate\Validation\Rules\Password;

final class StoreUserRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'username' => [
                'required',
                'string',
                'max:255',
                'unique:' . User::class,
            ],
            'email' => [
                'required',
                'string',
                'max:255',
                'lowercase',
                'email',
                'unique:' . User::class,
            ],
            'password' => [
                'required',
                'confirmed', Password::defaults(),
            ],
            'name' => [
                'nullable',
                'string',
                'max:255',
            ],
            'homepage_url' => [
                'nullable',
                'string',
                'max:255',
                'active_url',
            ],
        ];
    }
}
