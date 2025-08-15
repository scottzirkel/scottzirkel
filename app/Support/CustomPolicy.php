<?php

namespace App\Support;

use Spatie\Csp\Policy;
use Spatie\Csp\Preset;
use Spatie\Csp\Scheme;
use Spatie\Csp\Keyword;
use Spatie\Csp\Directive;

class CustomPolicy implements Preset
{
    public function configure(Policy $policy): void
    {
        if (app()->environment('local')) {
            $policy->add(Directive::BASE, 'scottzirkel.test:*');
            $policy->add(Directive::CONNECT, Scheme::WSS);
        }

        $policy->add(Directive::SCRIPT, ['cdn.scottzirkel.com', Keyword::UNSAFE_INLINE, 'sha256-hash', Keyword::UNSAFE_EVAL]);
        $policy->add(Directive::SCRIPT_ELEM, [Keyword::SELF, 'cdn.scottzirkel.com', Keyword::UNSAFE_INLINE, 'sha256-hash', Keyword::UNSAFE_EVAL]);
        $policy->addNonce(Directive::SCRIPT_ELEM);
        $policy->add(Directive::SCRIPT_ATTR, Keyword::SELF);
        $policy->addNonce(Directive::SCRIPT_ATTR);
        $policy->add(Directive::CONNECT, 'cdn.scottzirkel.com');
        $policy->add(Directive::PREFETCH, 'cdn.scottzirkel.com');
        $policy->add(Directive::STYLE, 'cdn.scottzirkel.com');
        $policy->add(Directive::FONT, 'cdn.scottzirkel.com');
    }
}
