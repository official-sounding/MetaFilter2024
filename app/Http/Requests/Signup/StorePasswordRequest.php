<?php

declare(strict_types=1);

namespace App\Http\Requests\Signup;

use App\Http\Requests\BaseFormRequest;
use App\Traits\AuthStatusTrait;

final class StorePasswordRequest extends BaseFormRequest
{
    use AuthStatusTrait;

    public function authorize(): bool
    {
        return $this->loggedOut();
    }

    public function rules(): array
    {
        return [
            'password' => [
                'required',
                'confirmed',
                'min:6',
            ],
            'password_confirmation' => [
                'required',
            ],
        ];
    }
}
