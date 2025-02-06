<?php

declare(strict_types=1);

namespace App\Http\Requests\User;

use App\Http\Requests\BaseFormRequest;
use App\Traits\FormRequestTrait;

final class DeleteProfileRequest extends BaseFormRequest
{
    use FormRequestTrait;

    // TODO: Add check for user
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [];
    }
}
