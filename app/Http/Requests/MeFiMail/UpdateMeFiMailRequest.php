<?php

declare(strict_types=1);

namespace App\Http\Requests\MeFiMail;

use App\Http\Requests\BaseFormRequest;
use App\Traits\FormRequestTrait;

final class UpdateMeFiMailRequest extends BaseFormRequest
{
    use FormRequestTrait;

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
