<?php

declare(strict_types=1);

namespace App\Http\Requests\ModeratorNotes;

final class UpdateModeratorNoteRequest extends StoreModeratorNoteRequest
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
