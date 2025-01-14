<?php

declare(strict_types=1);

namespace App\Http\Requests\Register;

use Illuminate\Foundation\Http\FormRequest;

final class StoreOptionalInfoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
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
