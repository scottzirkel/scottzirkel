<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Vite;

class AddContentSecurityPolicyHeaders
{
    public function handle(Request $request, Closure $next): mixed
    {
        $nonce = Vite::useCspNonce();

        // Share nonce with Blade views
        View::share('cspNonce', $nonce);

        $response = $next($request);

        if ( ! $response instanceof Response) {
            return $next($request);
        }

        $csp = collect([
            'base-uri' => "'self'",
            'connect-src' => "'self' cdn.scottzirkel.com",
            'default-src' => "'self' 'unsafe-inline' cdn.scottzirkel.com",
            'form-action' => "'self'",
            'img-src' => "'self' cdn.scottzirkel.com cdn.dribbble.com",
            'media-src' => "'self'",
            'object-src' => "'none'",
            'style-src' => "'self' cdn.scottzirkel.com fonts.bunny.net 'nonce-".$nonce."'",
            'script-src' => "'self' cdn.scottzirkel.com 'nonce-".$nonce."'",
            'font-src' => 'cdn.scottzirkel.com fonts.bunny.net',
        ])
            ->map(function ($value) {
                if ( ! app()->environment('local')) {
                    return $value;
                }
                $value .= ' wss: scottzirkel.test scottzirkel.test:5173';

                return $value;
            })
            ->implode(fn ($value, $key) => "{$key} {$value};");

        return $response->withHeaders([
            'Content-Security-Policy' => $csp,
        ]);
    }
}
