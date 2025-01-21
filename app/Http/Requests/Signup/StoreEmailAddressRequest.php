<?php

declare(strict_types=1);

namespace App\Http\Requests\Signup;

use App\Http\Requests\BaseFormRequest;
use App\Models\User;
use Illuminate\Validation\Rule;

final class StoreEmailAddressRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        return $this->loggedOut();
    }

    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
        ];
    }
}
