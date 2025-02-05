<?php

declare(strict_types=1);

namespace App\Http\Requests\Jobs;

use Illuminate\Foundation\Http\FormRequest;

final class StoreAvailabilityRequest extends FormRequest
{
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
