<?php

declare(strict_types=1);

namespace App\Repositories;

final class ContactRepository extends BaseRepository implements ContactRepositoryInterface
{
    // TODO: Make a Contact model with factory and migration
    public function __construct(Contact $model)
    {
        parent::__construct($model);
    }
}
