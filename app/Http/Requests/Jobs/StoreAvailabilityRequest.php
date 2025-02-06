<?php

declare(strict_types=1);

namespace App\Http\Requests\Jobs;

use App\Traits\FormRequestTrait;
use Illuminate\Foundation\Http\FormRequest;

final class StoreAvailabilityRequest extends FormRequest
{
    use FormRequestTrait;
    
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
