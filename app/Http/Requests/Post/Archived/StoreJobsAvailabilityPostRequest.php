<?php

declare(strict_types=1);

namespace App\Http\Requests\Post;

final class StoreJobsAvailabilityPostRequest extends BaseStorePostFormRequest
{
    public function rules(): array
    {
        $rules = parent::rules();

        return $rules;
    }
}
