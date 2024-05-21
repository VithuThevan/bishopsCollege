<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Handle an incoming request.
     * 
     * @var array<int, string>
     */
    protected $except = [
        'http://localhost:8080/products/response',
    ];
}
