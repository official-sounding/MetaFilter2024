<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Contact;

final class ContactRepository extends BaseRepository implements ContactRepositoryInterface
{
    public function __construct(Contact $model)
    {
        parent::__construct($model);
    }
}
