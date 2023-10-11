<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/hdfc-payment/response',
        '/hdfc-payment/apsc/response',
        '/hdfc-payment/recorded/response',
        '/hdfc-payment/study-material/response',
    ];
}

