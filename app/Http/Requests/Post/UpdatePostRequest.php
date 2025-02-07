<?php

declare(strict_types=1);

namespace App\Http\Requests\Post;

use App\Traits\FormRequestTrait;

final class UpdatePostRequest extends StorePostRequest
{
    use FormRequestTrait;

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
