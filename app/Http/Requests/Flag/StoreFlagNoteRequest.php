<?php

declare(strict_types=1);

namespace App\Http\Requests\Flag;

use App\Http\Requests\BaseFormRequest;
use App\Traits\FormRequestTrait;

final class StoreFlagNoteRequest extends BaseFormRequest
{
    use FormRequestTrait;

    public function authorize(): bool
    {
        return $this->loggedIn();
    }

    public function rules(): array
    {
        return [
            'reason' => [
                'required',
                'string',
                'max:500',
            ]
        ];
    }
}
