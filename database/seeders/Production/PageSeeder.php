<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class PageSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $pages = config('metafilter.seeders.pages');

        foreach ($pages as $page) {
            if (!isset($page['body'])) {
                $title = $page['title'] ?? 'unknown';
                $slug = $page['slug'] ?? 'unknown';
                $page['body'] = '';
            }

            if ($page['body'] === '') {
                \Log::warning("Empty 'body' field for page: $title (slug: $slug).");
            }

            (new Page())->firstOrCreate([
                'title' => $page['title'],
                'slug' => $page['slug'],
                'body' => $page['body'],
                'is_public' => true,
                'indexable' => true,
                'register_outside_filament' => true,
            ]);
        }
    }
}
