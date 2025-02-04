<?php

declare(strict_types=1);

namespace App\Http\Requests\Flag;

use App\Http\Requests\BaseFormRequest;
use App\Traits\FormRequestTrait;

final class StoreFlagRequest extends BaseFormRequest
{
    use FormRequestTrait;

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
