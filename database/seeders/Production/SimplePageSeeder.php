<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Models\SimplePage;
use Illuminate\Database\Seeder;

final class SimplePageSeeder extends Seeder
{
    public function run(): void
    {
        $pages = config('metafilter.seeders.pages');

        foreach ($pages as $page) {
            $simplePage = new SimplePage();

            $simplePage->title = $page['title'];
            $simplePage->slug = $page['slug'];
            $simplePage->content = $page['content'];

            $simplePage->is_public = true;
            $simplePage->indexable = true;
            $simplePage->register_outside_filament = true;

            $simplePage->save();
        }
    }
}
