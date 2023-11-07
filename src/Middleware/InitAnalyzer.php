<?php

namespace App\Http\Middleware;

use Closure;
use Duckster\Analyzer\Analyzer;
use Illuminate\Http\Request;
use LaravelAnalyzerConfig;
use Symfony\Component\HttpFoundation\Response;

class InitAnalyzer
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Init analyzer
        if (is_null(Analyzer::config())) {
            Analyzer::tryToInit(new LaravelAnalyzerConfig());
        }

        return $next($request);
    }
}
