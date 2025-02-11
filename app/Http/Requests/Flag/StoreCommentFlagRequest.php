<?php

declare(strict_types=1);

namespace App\Http\Requests\Flag;

final class StoreCommentFlagRequest extends BaseStoreFlagRequest
{
    public function rules(): array
    {
        $rules = parent::rules();

        $rules[] = [
            'comment_id' => [
                'required',
                'integer',
            ],
        ];

        return $rules;
    }
}
