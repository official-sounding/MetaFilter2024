<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Models\Snippet;
use Illuminate\Database\Seeder;

final class SnippetSeeder extends Seeder
{
    public function run(): void
    {
        $snippets = config('metafilter.seeders.snippets');

        Snippet::upsert($snippets, 'title');
    }
}
