<?php

declare(strict_types=1);

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

abstract class BaseStorePostFormRequest extends FormRequest {
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
            'category_id.numeric' => 'Invalid category value.',
        ];
    }
}
