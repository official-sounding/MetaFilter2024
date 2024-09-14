<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Enums\EnvironmentEnum;
use Closure;

final class BasicAuth
{
    public function handle($request, Closure $next)
    {
        if (config('app.env') !== EnvironmentEnum::Staging->value) {
            return $next($request);
        }

        $AUTH_USERNAME = config('staging.auth.username');
        $AUTH_PASSWORD = config('staging.auth.password');

        header('Cache-Control: no-cache, must-revalidate, max-age=0');

        $hasSuppliedCredentials =
            !(
                empty($_SERVER['PHP_AUTH_USER']) &&
                empty($_SERVER['PHP_AUTH_PW'])
            );

        $isNotAuthenticated = (
            !$hasSuppliedCredentials ||
            $_SERVER['PHP_AUTH_USER'] != $AUTH_USERNAME ||
            $_SERVER['PHP_AUTH_PW'] != $AUTH_PASSWORD
        );

        if ($isNotAuthenticated) {
            header('HTTP/1.1 401 Authorization Required');
            header('WWW-Authenticate: Basic realm="Access denied"');
            exit;
        }

        return $next($request);
    }
}
