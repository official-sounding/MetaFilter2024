<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Faq;

final class FaqRepository extends BaseRepository implements FaqRepositoryInterface
{
    public function __construct(Faq $model)
    {
        parent::__construct($model);
    }
}
