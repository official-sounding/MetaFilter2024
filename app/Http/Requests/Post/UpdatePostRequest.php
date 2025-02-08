<?php

declare(strict_types=1);

namespace App\Http\Requests\Post;

use App\Traits\AuthStatusTrait;

final class UpdatePostRequest extends StorePostRequest
{
    use AuthStatusTrait;

    public function authorize(): bool
    {
        return $this->loggedIn();
    }

    public function rules(): array
    {
        $rules = parent::rules();

        return $rules;
    }
}
