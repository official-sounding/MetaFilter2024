<?php

declare(strict_types=1);

namespace App\Http\Requests;

class StoreContactRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            //
        ];
    }
}
