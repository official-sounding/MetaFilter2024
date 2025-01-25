<?php

declare(strict_types=1);

namespace App\Http\Requests\Post;

use App\Http\Requests\BaseFormRequest;
use App\Traits\FormRequestTrait;

class StoreTitleAndLinkRequest extends BaseFormRequest
{
    use FormRequestTrait;

    public function authorize(): bool
    {
        return $this->loggedIn();
    }

    // TODO: Match max lengths with database field lengths\
    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'link_text' => [
                'nullable',
                'string',
                'max:255',
            ],
            'url' => [
                'nullable',
                'string',
                'max:255',
                'url:https',
                'active_url',
            ],
        ];
    }
}
