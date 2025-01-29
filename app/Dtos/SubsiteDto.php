<?php

declare(strict_types=1);

namespace App\Dtos;

final class SubsiteDto {
    public function __construct(
        public string $name,
        public string $nickname,
        public string $logo_filename,
        public string $white_text,
        public string $green_text,
        public string $tagline,
        public string $subdomain,
        public string $route,
        public string $view,
        public bool $has_theme,
        public bool $in_dropdown,
        public bool $in_footer_nav,
        public int $footer_navigation_sort_order,
        public int $global_navigation_sort_order,
    ) {}
}
