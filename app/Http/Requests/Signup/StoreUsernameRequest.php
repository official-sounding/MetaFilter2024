<?php

declare(strict_types=1);

namespace App\Http\Requests\Signup;

use App\Http\Requests\BaseFormRequest;
use App\Models\User;
use Illuminate\Validation\Rule;

final class StoreUsernameRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        return $this->loggedOut();
    }

    public function rules(): array
    {
        return [
            'username' => [
                'required',
                'string',
                'max:255',
                Rule::unique(User::class),
            ],
        ];
    }
}
