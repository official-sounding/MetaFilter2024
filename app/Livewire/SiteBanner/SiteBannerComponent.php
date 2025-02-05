<?php

declare(strict_types=1);

namespace App\Livewire\SiteBanner;

use App\Models\BannerLink;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

final class SiteBannerComponent extends Component
{
    public bool $collapsed = false;
    public string $altText = 'Collapse';
    public string $iconFilename = 'arrows-collapse';
    public Collection $bannerLinks;

    public function mount(): void {
        // TODO: Limit and cache
        $this->bannerLinks = BannerLink::all()->collect();
    }

    public function render(): View
    {
        return view('livewire.site-banner.site-banner-component');
    }

    public function toggleBanner(): void {
        $this->collapsed = !$this->collapsed;

        $this->altText = $this->collapsed ? trans('Expand') : trans('Collapse');

        $this->iconFilename = $this->collapsed ? trans('arrows-expand') : trans('arrows-collapse');
    }
}
