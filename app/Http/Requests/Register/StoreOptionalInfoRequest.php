<?php

declare(strict_types=1);

namespace App\Http\Requests\Register;

use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

final class StoreOptionalInfoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'username' => [
                'nullable',
                'string',
                'max:255',
                Rule::unique(User::class),
            ],
            'username' => [
                'nullable',
                'string',
                'max:255',
                Rule::unique(User::class),
            ],
        ];
    }
}
