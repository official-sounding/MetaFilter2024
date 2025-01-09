<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class StoreLanguageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $locales = config('app.available_locales');

        return [
            'language' => [
                'required',
                'string',
                "in_array:$locales.*",
            ],
        ];
    }
}
