<?php

namespace App\Http\Middleware;

use Closure;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class RequestUuidMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $uuid = Uuid::uuid4()->toString();
        $request->headers->set('X-Request-Id', $uuid);
        View::share('request_uuid', $uuid);
        $request->merge(['request_uuid' => $uuid]);

        return $next($request);
    }
}
