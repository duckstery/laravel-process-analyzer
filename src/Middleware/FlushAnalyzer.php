<?php

namespace App\Http\Middleware;

use Closure;
use Duckstery\Analyzer\Analyzer;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FlushAnalyzer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Flush analyzer
        Analyzer::flush();

        return $response;
    }
}
