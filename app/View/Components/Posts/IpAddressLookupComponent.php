<?php

declare(strict_types=1);

namespace App\View\Components\Posts;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class IpAddressLookupComponent extends Component
{
    public string $url;

    public function __construct()
    {
        $this->url = $this->getUrl();
    }

    public function render(): View
    {
        return view('components.posts.ip-address-lookup', [
            'url' => $this->url,
        ]);
    }

    private function getUrl(): string
    {
        return '/admin/ip-addresses/' . request()->ip();
    }
}
