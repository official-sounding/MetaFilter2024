<?php

declare(strict_types=1);

namespace App\Http\Requests\Post;

use App\Http\Requests\BaseFormRequest;
use App\Traits\AuthStatusTrait;

final class StoreBodyAndMoreInsideRequest extends BaseFormRequest
{
    use AuthStatusTrait;

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
            'more_inside' => [
                'nullable',
                'string',
            ],
        ];
    }
}
