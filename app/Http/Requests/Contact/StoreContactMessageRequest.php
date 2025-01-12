<?php

declare(strict_types=1);

namespace App\Http\Requests\Contact;

use App\Http\Requests\BaseFormRequest;

final class StoreContactMessageRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            'subject' => [
                'required',
                'string',
                'max:255',
            ],
            'message' => [
                'required',
                'string',
            ],
            'copy_sender' => [
                'nullable',
                'boolean',
            ],
        ];
    }
}
