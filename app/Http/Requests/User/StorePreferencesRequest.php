<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Traits\FormRequestTrait;

final class StorePreferencesRequest extends BaseFormRequest
{
    use FormRequestTrait;

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
