<?php

declare(strict_types=1);

namespace App\Http\Requests\Post;

use App\Enums\SubsiteEnum;
use App\Http\Requests\BaseFormRequest;
use App\Traits\AuthStatusTrait;
use App\Traits\SubsiteTrait;

class StorePostRequest extends BaseFormRequest
{
    use AuthStatusTrait;
    use SubsiteTrait;

    public function __construct()
    {
        parent::__construct();
    }

    public function rules(): array
    {
        return $this->getRulesBySubdomain();
    }

    private function getRulesBySubdomain(): array
    {
        $subdomain = $this->getSubdomain();

        $baseRules = $this->getBaseRules();

        return match ($subdomain) {
            SubsiteEnum::Ask->value => $this->getAskRules(),
            default => $baseRules,
        };
    }

    private function getBaseRules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'body' => [
                'required',
                'string',
            ],
            'more_inside' => [
                'nullable',
                'string',
            ],
            'tags' => [
                'required',
                'string',
            ],
        ];
    }

    private function getAskRules(): array
    {
        $baseRules = $this->getBaseRules();

        $rules = [];

        return array_merge($baseRules, $rules);
    }
}
