<?php

declare(strict_types=1);

namespace App\Http\Requests\Passkey;

use App\Http\Requests\BaseFormRequest;

class StorePasskeyRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            'user_id' => [
                'required',
                'integer',
            ],
            'text' => [
                'required',
                'string',
            ],
            'credential_id' => [
                'required',
                'string',
            ],
            'data' => [
                'required',
            ],
        ];
    }
}
