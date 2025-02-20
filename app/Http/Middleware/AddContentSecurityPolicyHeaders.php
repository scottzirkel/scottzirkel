<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Vite;

class AddContentSecurityPolicyHeaders
{
    public function handle(Request $request, Closure $next)
    {
        $nonce = Vite::useCspNonce();

        $csp = collect([
            'base-uri' => "'self'",
            'connect-src' => "'self' cdn.scottzirkel.com",
            'default-src' => "'self'",
            'form-action' => "'self'",
            'img-src' => "'self' cdn.scottzirkel.com",
            'media-src' => "'self'",
            'object-src' => "none",
            'style-src' => "'self' cdn.scottzirkel.com 'unsafe-inline' 'unsafe-hashes' 'nonce-".$nonce."'",
            'script-src' => "'self' cdn.scottzirkel.com 'nonce-".$nonce."' 'unsafe-inline'",
            'prefetch-src' => 'cdn.scottzirkel.com',
            'font-src' => 'cdn.scottzirkel.com',
        ])
            ->map(function ($value, $key) {
//                dump($key, $value);
                if (!app()->environment('local')) {
                    return $value;
                }
                $value .= ' wss: scottzirkel.test:5173';
                return $value;
            })
            ->implode(fn ($value, $key) => "{$key} {$value};");

        return $next($request)->withHeaders([
            'Content-Security-Policy' => $csp,
        ]);
    }
}
