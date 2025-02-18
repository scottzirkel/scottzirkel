<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Vite;

class AddViteNonceMiddleware
{
    public function handle(Request $request, Closure $next): mixed
    {

        Vite::useCspNonce();

        $response = $next($request);

        if ( ! $response instanceof Response) {
            return $next($request);
        }

        return $response->withHeaders([
            'Content-Security-Policy' => "script-src 'nonce-".Vite::cspNonce()."'",
        ]);
    }
}
