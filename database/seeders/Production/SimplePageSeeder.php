<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Models\SimplePage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class SimplePageSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $pages = config('metafilter.seeders.pages');

        foreach ($pages as $page) {
            (new SimplePage())->firstOrCreate([
                'title' => $page['title'],
                'slug' => $page['slug'],
                'content' => $page['content'],
                'is_public' => true,
                'indexable' => true,
                'register_outside_filament' => true,
            ]);
        }
    }
}
