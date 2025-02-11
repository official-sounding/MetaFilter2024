<?php

declare(strict_types=1);

namespace App\Http\Requests\Comment;

use App\Http\Requests\BaseFormRequest;
use App\Traits\AuthStatusTrait;

class StoreCommentRequest extends BaseFormRequest
{
    use AuthStatusTrait;

    public function authorize(): bool
    {
        return $this->loggedIn();
    }

    public function rules(): array
    {
        return [
            'text' => [
                'required',
                'string',
            ],
            'parent_id' => [
                'nullable',
            ],
            'post_id' => [
                'required',
                'integer' => 'exists:posts,id',
            ],
            'user_id' => [
                'required',
                'integer' => 'exists:users,id',
            ],
        ];
    }
}
