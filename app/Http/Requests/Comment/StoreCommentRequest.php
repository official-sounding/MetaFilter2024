<?php

declare(strict_types=1);

namespace App\Http\Requests\Comment;

use App\Http\Requests\BaseFormRequest;
use App\Traits\FormRequestTrait;

class StoreCommentRequest extends BaseFormRequest
{
    use FormRequestTrait;

    public function authorize(): bool
    {
        return $this->loggedIn();
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
