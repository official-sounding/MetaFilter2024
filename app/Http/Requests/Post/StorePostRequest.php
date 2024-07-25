<?php

declare(strict_types=1);

namespace App\Http\Requests\Post;

use App\Http\Requests\BaseFormRequest;

class StorePostRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        // TODO: Add check for last post on subsite
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                'min:1',
                'max:255',
            ],
            'legacy_id' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'url' => [
                'required',
                'string',
                'min:1',
            ],
            'body' => [
                'required',
                'string',
                'min:1',
            ],
            'more_inside' => [
                'nullable',
                'string',
                'min:1',
            ],
            'subsite_id' => [
                'required',
                'exists:subsites,id',
            ],
            'user_id' => [
                'required',
                'exists:users,id',
            ],
        ];
    }
}
