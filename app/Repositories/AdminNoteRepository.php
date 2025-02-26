<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\AdminNote;

final class AdminNoteRepository extends BaseRepository implements AdminNoteRepositoryInterface
{
    public function __construct(AdminNote $model)
    {
        parent::__construct($model);
    }
}
