<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Enums\RouteNameEnum;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

abstract class BaseAuthController extends Controller
{
    public const string INTENDED_ROUTE_NAME = RouteNameEnum::METAFILTER_POST_INDEX->value;
    public const string REDIRECT_TO_ROUTE_NAME = RouteNameEnum::METAFILTER_POST_INDEX->value;

    public function redirectTo(string $routeName): RedirectResponse
    {
        return redirect(route($routeName, absolute: false));
    }
}
