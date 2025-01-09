<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class BaseFormRequest extends FormRequest
{
    public function attributes(): array
    {
        return [
            'email' => 'email address',
        ];
    }

}
