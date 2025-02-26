<?php

declare(strict_types=1);

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseFormRequest;
use App\Traits\AuthStatusTrait;

final class StoreLoginRequest extends BaseFormRequest
{
    use AuthStatusTrait;

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
                'min:4',
                'max:50',
            ],
            'password' => [
                'required',
                'string',
            ],
        ];
    }
}
