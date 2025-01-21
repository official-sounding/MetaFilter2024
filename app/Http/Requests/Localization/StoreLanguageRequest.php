<?php

declare(strict_types=1);

namespace App\Http\Requests\Localization;

use App\Http\Requests\BaseFormRequest;

final class StoreLanguageRequest extends BaseFormRequest
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
