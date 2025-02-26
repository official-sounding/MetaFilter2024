<?php

declare(strict_types=1);

namespace App\Http\Requests\AdminNotes;

final class UpdateAdminNoteRequest extends StoreAdminNoteRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        $rules = parent::rules();

        $rules[] = ['id' => 'required|integer'];

        return $rules;
    }
}
