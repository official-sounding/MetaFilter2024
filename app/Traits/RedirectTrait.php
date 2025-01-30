<?php

namespace App\Traits;

use Illuminate\Http\RedirectResponse;

trait RedirectTrait {
    public function redirectToRoute(string $route): RedirectResponse
    {
        return redirect()->route($route);
    }

    public function redirectToRouteWithData(string $route, array $data): RedirectResponse
    {
        return redirect()->route($route, $data);
    }

    public function redirectToUrlWithNotification(string $url, string $type, string $message): RedirectResponse
    {
        return redirect($url)->with($type, $message);
    }
}
