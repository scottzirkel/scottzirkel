<?php

namespace App\Support;

use Spatie\Csp\Nonce\RandomString;
use Illuminate\Support\Facades\Vite;
use Spatie\Csp\Nonce\NonceGenerator;

class ViteNonceGenerator implements NonceGenerator
{
    public function generate(): string
    {
        $nonce = Vite::cspNonce();

        if ( ! $nonce) {
            $nonce = Vite::useCspNonce((new RandomString)->generate());
        }

        return $nonce;
    }
}
