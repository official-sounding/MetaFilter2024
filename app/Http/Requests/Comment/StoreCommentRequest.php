<?php

declare(strict_types=1);

namespace App\Http\Requests\Comment;

use App\Http\Requests\BaseFormRequest;
class StoreCommentRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'body' => [
                'required',
                'string',
            ],
        ];
    }
}
