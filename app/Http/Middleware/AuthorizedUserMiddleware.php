<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

final class AuthorizedUserMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user->id === auth()->id()) {
            return $next($request);
        }

        abort(Response::HTTP_FORBIDDEN);
    }
}
