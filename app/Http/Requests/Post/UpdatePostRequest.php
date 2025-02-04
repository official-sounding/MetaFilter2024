<?php

declare(strict_types=1);

namespace App\Http\Requests\Post;

use App\Http\Requests\BaseFormRequest;
use App\Traits\FormRequestTrait;

final class UpdatePostRequest extends BaseFormRequest
{
    use FormRequestTrait;

    public function authorize(): bool
    {
        return $this->loggedOut();
    }

    public function rules(): array
    {
        $bodyAndMoreInsideRules = StoreBodyAndMoreInsideRequest::rules();
        $titleAndLinkRules = StoreTitleAndLinkRequest::rules();

        return array_merge($bodyAndMoreInsideRules, $titleAndLinkRules);
    }
}
