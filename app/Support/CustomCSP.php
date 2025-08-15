<?php

namespace App\Support;

use Spatie\Csp\Policy;
use Spatie\Csp\Preset;
use Spatie\Csp\Directive;

class CustomCSP implements Preset
{
    public function configure(Policy $policy): void
    {
        $policy->add(Directive::CONNECT, 'cdn.scottzirkel.com');
        $policy->add(Directive::PREFETCH, 'cdn.scottzirkel.com');
        $policy->add(Directive::STYLE, 'cdn.scottzirkel.com');
        $policy->add(Directive::SCRIPT, 'cdn.scottzirkel.com');
        $policy->add(Directive::IMG, 'cdn.scottzirkel.com');
        $policy->add(Directive::FONT, 'cdn.scottzirkel.com');
    }
}
