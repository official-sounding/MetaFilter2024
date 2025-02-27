<?php

declare(strict_types=1);

namespace App\Http\Requests\Mail;

use App\Http\Requests\BaseFormRequest;
use App\Traits\AuthStatusTrait;

/**
 * @property string $subject
 * @property string $message
 */
final class StoreMeFiMailRequest extends BaseFormRequest
{
    use AuthStatusTrait;

    public function authorize(): bool
    {
        return $this->loggedIn();
    }

    public function rules(): array
    {
        return [
            'subject' => [
                'required',
                'string',
            ],
            'message' => [
                'required',
                'string',
            ],
        ];
    }
}
