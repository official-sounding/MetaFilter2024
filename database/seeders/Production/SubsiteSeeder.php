<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Dtos\SubsiteDto;
use App\Models\Subsite;
use App\Traits\StringFormattingTrait;
use Illuminate\Database\Seeder;

final class SubsiteSeeder extends Seeder
{
    use StringFormattingTrait;

    public function run(): void
    {
        $subsites = config('metafilter.seeders.subsites');

        foreach ($subsites as $subsite) {
            $dto = new SubsiteDto(
                name: $subsite['name'],
                nickname: $subsite['nickname'] ?? null,
                logo_filename: $subsite['logo_filename'] ?? null,
                white_text: $subsite['white_text'],
                green_text: $subsite['green_text'],
                tagline: $subsite['tagline'] ?? null,
                subdomain: $subsite['subdomain'],
                route: $subsite['route'],
                view: $subsite['view'],
                has_theme: $subsite['hasTheme'] ?? false,
                in_dropdown: $subsite['inDropdown'] ?? false,
                in_footer_nav: $subsite['inFooterNav'] ?? false,
                footer_navigation_sort_order: $subsite['footerNavigationSortOrder'] ?? 0,
                global_navigation_sort_order: $subsite['globalNavigationSortOrder'] ?? 0
            );

            Subsite::firstOrCreate((array) $dto);
        }
    }
}
