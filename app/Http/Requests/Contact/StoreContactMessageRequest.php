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
            'email' => [
                'required',
                'string',
                'email',
                'min:1',
                'max:255',
            ],
            'subject' => [
                'required',
                'string',
                'min:1',
                'max:255',
            ],
            'message' => [
                'required',
                'string',
                'min:1',
            ],
        ];
    }

}
