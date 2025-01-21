<?php

declare(strict_types=1);

namespace App\Http\Requests\Signup;

use App\Http\Requests\BaseFormRequest;

final class StoreOptionalInfoRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        return $this->loggedOut();
    }

    public function rules(): array
    {
        return [
            'name' => [
                'nullable',
                'string',
                'max:255',
            ],
            'homepage_url' => [
                'nullable',
                'string',
                'max:255',
                'url:https',
                'active_url',
            ],
        ];
    }
}
