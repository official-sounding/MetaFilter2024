<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Models\Subsite;
use App\Traits\PunctuationTrait;
use Illuminate\Database\Seeder;

final class SubsiteSeeder extends Seeder
{
    use PunctuationTrait;

    public function run(): void
    {
        $subsites = [];

        $subsiteData = config('metafilter.seeders.subsites');

        $now = now();

        foreach ($subsiteData as $subsite) {
            // TODO: Move to DTO
            $subsites[] = [
                'name' => $subsite['name'],
                'slug' => $this->getSlug($subsite['name']),
                'nickname' => $subsite['nickname'] ?? null,
                'logo_filename' => $subsite['logoFilename'] ?? null,
                'white_text' => $subsite['whiteText'] ?? null,
                'green_text' => $subsite['greenText'] ?? null,
                'tagline' => $subsite['tagline'] ?? null,
                'subdomain' => $subsite['subdomain'],
                'route' => $subsite['route'],
                'view' => $subsite['view'],
                'has_theme' => $subsite['hasTheme'] ?? false,
                'in_dropdown' => $subsite['inDropdown'] ?? false,
                'in_footer_nav' => $subsite['inFooterNav'] ?? false,
                'footer_navigation_sort_order' => $subsite['footerNavigationSortOrder'] ?? 0,
                'global_navigation_sort_order' => $subsite['globalNavigationSortOrder'] ?? 0,
                'created_at' => $now,
                'updated_at' => null,
            ];
        }

        Subsite::upsert($subsites, 'name');
    }
}
