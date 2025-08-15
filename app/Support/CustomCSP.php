<?php

namespace App\Support;

use Spatie\Csp\Policy;
use Spatie\Csp\Preset;
use Spatie\Csp\Directive;

class CustomCSP implements Preset
{
    public function configure(Policy $policy): void
    {
        $policy
            ->add(Directive::CONNECT, 'cdn.scottzirkel.com')
            ->add(Directive::STYLE, 'cdn.scottzirkel.com')
            ->add(Directive::SCRIPT, 'cdn.scottzirkel.com')
            ->add(Directive::IMG, 'cdn.scottzirkel.com')
            ->add(Directive::FONT, 'cdn.scottzirkel.com');

        $policy
            ->add(Directive::IMG, 'cdn.dribbble.com');

        $policy
            ->add(Directive::SCRIPT, "'self'")
            ->add(Directive::STYLE, "'self'")
            ->addNonce(Directive::SCRIPT)
            ->addNonce(Directive::STYLE);
    }
}
