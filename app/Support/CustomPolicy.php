<?php

namespace App\Support;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

class CustomPolicy extends Basic
{
    public function configure(): void
    {
        parent::configure();
        $this->addDirective(Directive::PREFETCH, 'fonts.bunny.net');
        $this->addDirective(Directive::STYLE, 'fonts.bunny.net');
        $this->addDirective(Directive::SCRIPT, 'fonts.bunny.net');
        $this->addDirective(Directive::FONT, 'fonts.bunny.net');
    }
}
