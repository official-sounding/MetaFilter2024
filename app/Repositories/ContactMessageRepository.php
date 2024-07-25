<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\ContactMessage;

final class ContactMessageRepository extends BaseRepository implements ContactMessageRepositoryInterface
{
    public function __construct(ContactMessage $model)
    {
        parent::__construct($model);
    }
}
