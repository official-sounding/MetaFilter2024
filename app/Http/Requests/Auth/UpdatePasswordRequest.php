<?php

declare(strict_types=1);

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseFormRequest;
use App\Traits\FormRequestTrait;
use Illuminate\Support\Facades\Hash;

final class UpdatePasswordRequest extends BaseFormRequest
{
    use FormRequestTrait;

    public function authorize(): bool
    {
        return $this->loggedIn();
    }

    public function rules(string $password): array
    {
        return [
            'password' => Hash::make($password),
        ];
    }
}
