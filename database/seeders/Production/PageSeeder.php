<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Models\Page;
use App\Traits\StringFormattingTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class PageSeeder extends Seeder
{
    use StringFormattingTrait;
    use WithoutModelEvents;

    public function run(): void
    {
        $pages = config('metafilter.seeders.pages');

        foreach ($pages as $page) {
            $title = $page['title'];

            $slug = $page['slug'] ?? $this->getSlug($title);

            (new Page())->firstOrCreate([
                'title' => $title,
                'slug' => $slug,
                'body' => $page['body'],
                'is_public' => true,
                'indexable' => true,
                'register_outside_filament' => true,
            ]);
        }
    }
}
