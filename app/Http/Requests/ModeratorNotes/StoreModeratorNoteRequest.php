<?php

declare(strict_types=1);

namespace App\Http\Requests\ModeratorNotes;

use App\Http\Requests\BaseFormRequest;

class StoreModeratorNoteRequest extends BaseFormRequest
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
