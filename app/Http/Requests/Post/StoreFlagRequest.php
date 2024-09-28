<?php

declare(strict_types=1);

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

final class StoreFlagRequest extends FormRequest
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
                'integer',
            ],
            'note' => [
                'sometimes',
            ],
        ];
    }
}
