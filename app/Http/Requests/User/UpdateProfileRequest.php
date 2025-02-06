<?php

declare(strict_types=1);

namespace App\Http\Requests\User;

use App\Http\Requests\BaseFormRequest;
use App\Models\User;
use App\Traits\FormRequestTrait;
use Illuminate\Validation\Rule;

final class UpdateProfileRequest extends BaseFormRequest
{
    use FormRequestTrait;

    public function authorize(): bool
    {
        // TODO: Add check for user or admin
        return$this->loggedIn();
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }

    public function attributes(): array
    {
        return [
            'email' => 'email address',
        ];
    }
}
