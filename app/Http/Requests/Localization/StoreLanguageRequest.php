<?php

declare(strict_types=1);

namespace App\Http\Requests\Localization;

use App\Http\Requests\BaseFormRequest;
use App\Traits\AuthStatusTrait;

final class StoreLanguageRequest extends BaseFormRequest
{
    use AuthStatusTrait;

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
