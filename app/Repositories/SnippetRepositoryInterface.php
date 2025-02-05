<?php

declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface SnippetRepositoryInterface extends BaseRepositoryInterface {
    public function getBySlug(string $slug);
}
