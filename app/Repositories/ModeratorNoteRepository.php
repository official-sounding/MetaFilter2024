<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\ModeratorNote;

final class ModeratorNoteRepository extends BaseRepository implements ModeratorNoteRepositoryInterface
{
    public function __construct(ModeratorNote $model)
    {
        parent::__construct($model);
    }
}
