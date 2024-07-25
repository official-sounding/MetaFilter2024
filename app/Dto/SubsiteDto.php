<?php

declare(strict_types=1);

namespace App\Dto;

use App\Traits\StringFormattingTrait;

final class SubsiteDto
{
    use StringFormattingTrait;

    public function __construct(
        public readonly string $name,
        public readonly string $slug,
        public readonly string $email,
        public readonly ?string $logo_filename,
        public readonly ?string $nickname,
    ) {}

}
/*
 *                 'name' => $subsite['name'],
                'slug' => $this->getSlug($subsite['name']),
                'nickname' => $subsite['nickname'] ?? null,
                'logo_filename' => $subsite['logoFilename'] ?? null,
                'white_text' => $subsite['whiteText'],
                'green_text' => $subsite['greenText'],
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

 */
