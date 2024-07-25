<?php

declare(strict_types=1);

namespace App\Http\Requests\Post;

final class UpdatePostRequest extends StorePostRequest
{
    public function authorize(): bool
    {
        // TODO: Add check for user's ownership of the post or permission
        return auth()->check();
    }

    public function rules(): array
    {
        $rules = parent::rules();

        return $rules;
    }
}
