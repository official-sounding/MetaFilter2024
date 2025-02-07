<?php

declare(strict_types=1);

namespace App\Http\Requests\Post;

use App\Http\Requests\BaseFormRequest;
use App\Traits\FormRequestTrait;

class StorePostRequest extends BaseFormRequest
{
    use FormRequestTrait;

    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'link_text' => [
                'nullable',
                'string',
                'max:255',
            ],
            'link_url' => [
                'nullable',
                'string',
                'max:255',
                'url:https',
                'active_url',
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
}
