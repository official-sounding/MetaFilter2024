<?php

declare(strict_types=1);

namespace App\Http\Requests\AdminNotes;

use App\Http\Requests\BaseFormRequest;

class StoreAdminNoteRequest extends BaseFormRequest
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
