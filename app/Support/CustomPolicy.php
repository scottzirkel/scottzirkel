<?php

namespace App\Support;

use Spatie\Csp\Keyword;
use Spatie\Csp\Directive;
use Illuminate\Http\Request;
use Spatie\Csp\Policies\Basic;
use Symfony\Component\HttpFoundation\Response;

class CustomPolicy extends Basic
{
    public function configure(): void
    {
        parent::configure();
        $this->addDirective(Directive::SCRIPT, [Keyword::UNSAFE_INLINE, 'sha256-hash', '*.scottzirkel.com']);
        $this->addDirective(Directive::SCRIPT_ELEM, '*.scottzirkel.com');
        $this->addDirective(Directive::CONNECT, '*.scottzirkel.com');
        $this->addDirective(Directive::PREFETCH, '*.scottzirkel.com');
        $this->addDirective(Directive::STYLE, '*.scottzirkel.com');
        $this->addDirective(Directive::FONT, '*.scottzirkel.com');

        dd($this->directives);
//
//        $this->addDirective(Directive::PREFETCH, 'fonts.bunny.net');
//        $this->addDirective(Directive::STYLE, 'fonts.bunny.net');
//        $this->addDirective(Directive::SCRIPT, 'fonts.bunny.net');
//        $this->addDirective(Directive::FONT, 'fonts.bunny.net');
    }

    public function shouldBeApplied(Request $request, Response $response): bool
    {
        if (config('app.debug') && ($response->isClientError() || $response->isServerError())) {
            return false;
        }

        return parent::shouldBeApplied($request, $response);
    }
}
