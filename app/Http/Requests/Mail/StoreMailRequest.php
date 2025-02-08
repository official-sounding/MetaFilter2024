<?php

declare(strict_types=1);

namespace App\Http\Requests\Mail;

use App\Http\Requests\BaseFormRequest;
use App\Traits\AuthStatusTrait;

final class StoreMailRequest extends BaseFormRequest
{
    use AuthStatusTrait;
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            //
        ];
    }
}
