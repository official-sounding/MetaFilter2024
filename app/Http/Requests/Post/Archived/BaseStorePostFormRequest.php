<?php

declare(strict_types=1);

namespace App\Http\Requests\Post;

use App\Http\Requests\BaseFormRequest;

abstract class BaseStorePostFormRequest extends BaseFormRequest
{
    public function __construct()
    {
        parent::__construct();
    }

    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'url' => [
                'sometimes',
                'required_with:link_text',
                'string',
            ],
            'link_text' => [
                'sometimes',
                'required_with:url',
                'string',
            ],
            'body' => [
                'required',
                'string',
            ],
            'more_inside' => [
                'nullable',
                'string',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The title is required.',
        ];
    }
}
