<?php

declare(strict_types=1);

namespace App\Http\Requests\Signup;

use App\Http\Requests\BaseFormRequest;

final class StorePaymentRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        return $this->loggedOut();
    }

    public function rules(): array
    {
        return [
            'email' => [
            ],
        ];
    }
}
