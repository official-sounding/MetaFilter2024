<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Models\Page;
use Illuminate\Database\Seeder;

final class PageSeeder extends Seeder
{
    public function run(): void
    {
        $pages = config('metafilter.seeders.pages');

        Page::upsert($pages, 'title');
    }
}
