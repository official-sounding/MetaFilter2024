<?php

declare(strict_types=1);

namespace App\Http\Requests\Flag;

use App\Http\Requests\BaseFormRequest;
use App\Traits\AuthStatusTrait;

final class StoreFlagRequest extends BaseFormRequest
{
    use AuthStatusTrait;

    public function authorize(): bool
    {
        return $this->loggedIn();
    }

    public function rules(): array
    {
        return [
            'flag_reason_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
