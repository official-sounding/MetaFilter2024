<?php

declare(strict_types=1);

namespace App\Http\Requests\Bugs;

use App\Http\Requests\BaseFormRequest;
use App\Traits\AuthStatusTrait;

final class StoreBugReportRequest extends BaseFormRequest
{
    use AuthStatusTrait;

    public function authorize(): bool
    {
        return $this->loggedIn();
    }

    public function rules(): array
    {
        return [
            //
        ];
    }
}
