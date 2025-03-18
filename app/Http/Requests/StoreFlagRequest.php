<?php

declare(strict_types=1);

namespace App\Http\Requests;

final class StoreFlagRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'flag_reason_id' => [
                'required',
            ],
            'note' => [
                'nullable',
                'string',
            ],
        ];
    }
}
